<?php

namespace Shiptheory\Http;

class Api
{
    protected $api_token = null;
    const BASE_URL = 'https://api.shiptheory.com/v1/';

    public function __construct($api_token = null)
    {
        $this->api_token = $api_token;
    }

    /**
     * Perfoms a GET request using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @return Response|Error
     */
    public function get($endpoint)
    {
        return $this->makeRequest($endpoint);
    }

    /**
     * Perfoms a POST request to using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @param string $data Data to send.
     * @return Response|Error
     */
    public function post($endpoint, $data)
    {
        return $this->makeRequest($endpoint, 'POST', $data);
    }

     /**
     * Perfoms a PUT request using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @param string $data Data to send.
     * @return Response|Error
     */
    public function put($endpoint, $data)
    {
        return $this->makeRequest($endpoint, 'PUT', $data);
    }

    /**
     * Creates a CURL session and adds headers.
     *
     * @param string $endpoint Endpoint URL to poll.
     * @return \CurlHandle
     */
    private function makeCurl($endpoint)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => self::BASE_URL . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => '',
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'Content-Type: application/json',
                'Authorization:  Bearer ' . $this->api_token,
            ],
        ]);

        return $curl;
    }

    /**
     * Make a HTTP request to the API.
     *
     * @param string $endpoint Endpoint to poll.
     * @param string $http_request_method The HTTP request method if not a GET request.
     * @param string $data Data to send.
     * @return Response|Error
     */
    protected function makeRequest($endpoint, $http_request_method = null, $data = null)
    {
        $curl = $this->makeCurl($endpoint);

        if (!empty($http_request_method)) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $http_request_method);
        }

        // Use is_null instead of empty so empty strings can be passed
        if (!is_null($data)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }

        $result = curl_exec($curl);
        if ($result === false) {
            $error = new Error(curl_error($curl), curl_errno($curl));
            curl_close($curl);
            return $error;
        }

        $info = curl_getinfo($curl);
        curl_close($curl);

        $http_response_code = $info['http_code'];
        if ($http_response_code != 200) {
            $response_body = json_decode($result);
            return new Error($response_body->message, $http_response_code);
        }

        $response = new Response();
        $response->setBody($result);
        $response->setCode($http_response_code);
        $response->setUrl($info['url']);

        return $response;
    }

    /**
     * Get the current API token
     */
    public function getApiToken()
    {
        return $this->api_token;
    }

    /**
     * Set the current API token
     * @param string $token
     */
    public function setApiToken($token)
    {
        $this->api_token = $token;
    }
}
