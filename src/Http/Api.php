<?php

namespace Shiptheory\Http;

use Shiptheory\Util\Environment;
use Shiptheory\Util\Logger;

class Api
{
    const BASE_URL = 'https://api.shiptheory.com/v1/';

    /**
     * @var string
     */
    protected $api_token;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var string
     */
    protected $partner_tag;

    public function __construct($api_token = null, $partner_tag = null)
    {
        $this->setApiToken($api_token)
            ->setPartnerTag($partner_tag)
            ->setLogger(new Logger(Environment::loadEnvVariable('SHIPTHEORY_PHP_LOG_PATH')));
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
        $headers = [
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization:  Bearer ' . $this->api_token,
        ];

        if (!empty($tag = $this->getPartnerTag())) {
            $headers['Shiptheory-Partner-Tag'] = $tag;
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => self::BASE_URL . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => '',
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYPEER => Environment::loadEnvVariable('SHIPTHEORY_PHP_SSL_VERIFY_PEER'),
            CURLOPT_HTTPHEADER => $headers,
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
        $info = curl_getinfo($curl);
        $http_response_code = $info['http_code'];
        $info['body'] = json_decode($data, true);

        $this->logger->log(json_encode($info), strtoupper($http_request_method) . " - $endpoint");

        if ($result === false) {
            $error = new Error(curl_error($curl), $http_response_code);
            curl_close($curl);
            return $error;
        }

        if ($http_response_code != 200) {
            $response_body = json_decode($result);
            return new Error($response_body->message, $http_response_code);
        }

        $response = new Response();
        $response->setBody($result)->setCode($http_response_code)->setUrl($info['url']);

        curl_close($curl);

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

        return $this;
    }

    /**
     * Get the value of logger
     * @return Logger
     */
    public function getLogger()
    {
        return $this->logger;
    }

	/**
	 * Set the value of logger
	 *
	 * @param Logger $logger
	 */
	public function setLogger($logger)
	{
		$this->logger = $logger;

        return $this;
	}

    /**
     * Get the value of partner_tag
     * @return string
     */
    public function getPartnerTag()
    {
        return $this->partner_tag;
    }

	/**
	 * Set the value of partner_tag
	 *
	 * @param string $partner_tag
	 */
	public function setPartnerTag($partner_tag)
	{
		$this->partner_tag = $partner_tag;

        return $this;
	}
}
