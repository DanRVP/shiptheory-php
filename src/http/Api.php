<?php

namespace Shiptheory\http;

use Dotenv\Dotenv;

class Api
{
    protected $api_token = null;

    public function __construct($api_token = null)
    {
        $this->api_token = $api_token;
        $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
        $dotenv->load();
    }

    /**
     * Perfoms a GET request to the Shortcut API using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @throws \Exception
     * @return object|bool JSON object on success or false on fail.
     */
    public function get($endpoint)
    {
        $curl = $this->makeCurl($endpoint);

        try {
            $response = curl_exec($curl);
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        curl_close($curl);
        return json_decode($response);
    }

    /**
     * Perfoms a PUT request to the Shortcut API using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @param string $data Data to send.
     * @throws \Exception
     * @return object|bool JSON object on success or false on fail.
     */
    public function put($endpoint, $data)
    {
        $curl = $this->makeCurl($endpoint);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        try {
            $response = curl_exec($curl);
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        curl_close($curl);
        return json_decode($response);
    }

    /**
     * Perfoms a POST request to the Shortcut API using CURL.
     *
     * @param string $endpoint Endpoint to poll.
     * @param string $data Data to send.
     * @throws \Exception
     * @return object|bool JSON object on success or false on fail.
     */
    public function post($endpoint, $data)
    {
        $curl = $this->makeCurl($endpoint);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        try {
            $response = curl_exec($curl);
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        curl_close($curl);
        return json_decode($response);
    }

    /**
     * Creates a CURL session and adds headers.
     *
     * @param string $endpoint Endpoint URL to poll.
     * @return \CurlHandle
     */
    private function makeCurl($endpoint)
    {
        $headers = [
            'Authorization: Bearer' . $this->api_token,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, getenv('SHIPTHEORY_BASE_URL') . $endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        return $ch;
    }

    public function getApiToken()
    {
        return $this->api_token;
    }

    public function setApiToken($token)
    {
        $this->api_token = $token;
    }
}
