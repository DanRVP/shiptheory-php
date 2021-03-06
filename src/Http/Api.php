<?php

namespace Shiptheory\Http;

class Api
{
    protected $api_token = null;
    protected const BASE_URL = 'https://api.shiptheory.com/v1/';

    public function __construct($api_token = null)
    {
        $this->api_token = $api_token;
    }

    /**
     * Perfoms a GET request using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @throws \Exception
     * @return object|string
     */
    public function get($endpoint)
    {
        $response = new Response();
        $curl = $this->makeCurl($endpoint);

        try {
            $result = curl_exec($curl);
        } catch (\Exception $e) {
            return $response->setError('Error: ' . $e->getMessage());
        }

        $info = curl_getinfo($curl);
        curl_close($curl);

        $response->setBody($result);
        $response->setCode($info['http_code']);
        $response->setUrl($info['url']);

        return $response;
    }

    /**
     * Perfoms a POST request to using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @param string $data Data to send.
     * @throws \Exception
     * @return Response
     */
    public function post($endpoint, $data)
    {
        $curl = $this->makeCurl($endpoint);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $response = new Response();

        try {
            $result = curl_exec($curl);
        } catch (\Exception $e) {
            return $response->setError('Error: ' . $e->getMessage());
        }

        $info = curl_getinfo($curl);
        curl_close($curl);

        $response->setBody($result);
        $response->setCode($info['http_code']);
        $response->setUrl($info['url']);

        return $response;
    }

     /**
     * Perfoms a PUT request using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @param string $data Data to send.
     * @throws \Exception
     * @return Response
     */
    public function put($endpoint, $data)
    {
        $curl = $this->makeCurl($endpoint);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $response = new Response();

        try {
            $result = curl_exec($curl);
        } catch (\Exception $e) {
            return $response->setError('Error: ' . $e->getMessage());
        }

        $info = curl_getinfo($curl);
        curl_close($curl);

        $response->setBody($result);
        $response->setCode($info['http_code']);
        $response->setUrl($info['url']);

        return $response;
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
     * Get the current API token
     */
    public function getApiToken()
    {
        return $this->api_token;
    }

    /**
     * Set the current API token
     */
    public function setApiToken($token)
    {
        $this->api_token = $token;
    }
}
