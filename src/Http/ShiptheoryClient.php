<?php

namespace Shiptheory\Http;

use DateTime;

class ShiptheoryClient
{
    /**
     * @var AccessToken
     */
    protected $token;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Make a request to the Shiptheory API.
     *
     * @param $method HTTP method
     * @param $endpoint The endpoint to query
     * @param $data (optional) Required for post and put requests.
     * @return Response|Error
     */
    protected function makeShiptheoryApiRequest($method, $endpoint, $data = null)
    {
        $is_valid_token = $this->validateToken();
        if ($is_valid_token instanceof Error) {
            return $is_valid_token;
        }

        $api = new Api($this->token->getToken());
        return $api->{strtolower($method)}($endpoint, $data);
    }

    /**
     * Get a new access token and save it into memory.
     *
     * @return bool|Error true on success and an Error object on failure.
     */
    protected function getAccessToken()
    {
        $data = [
            'email' => $this->username,
            'password' => $this->password,
        ];

        $api = new Api();
        $response = $api->post('token', json_encode($data));

        if ($response instanceof Response) {
            $token = json_decode($response->getBody())->data->token;
            $this->token = new AccessToken($token, new DateTime());
            return true;
        }

        return $response;
    }

    /**
     * Checks to see if a token exists or has expired. If it has, then fetch a new one.
     *
     * @return bool|Error true on success and an Error object on failure.
     */
    protected function validateToken()
    {
        if (empty($this->token) || $this->checkTokenLifeExpired($this->token)) {
            return $this->getAccessToken($this->username, $this->password);
        }

        return true;
    }

    /**
     * Check to see if a token has expired beyond its 60 min lifetime.
     *
     * @param AccessToken $token The token to check.
     * @return bool
     */
    protected function checkTokenLifeExpired($token)
    {
        $diff = $token->getAge()->diff(new DateTime());
        $minutes = 0;
        $minutes += $diff->d * 1440;
        $minutes += $diff->h * 60;
        $minutes += $diff->i;

        // Expire tokens 2 mins before expiry in case speeds are slow
        return $minutes > 58;
    }

    /**
     * Book in a shipment with Shiptheory
     *
     * @param string $data json string of data.
     * @return Response|Error
     */
    public function bookShipment($data)
    {
        return $this->makeShiptheoryApiRequest('post', 'shipments', $data);
    }

    /**
     * View a shipment
     *
     * @param string $reference The unique reference used when creating the shipment.
     * @return Response|Error
     */
    public function viewShipment($reference)
    {
        return $this->makeShiptheoryApiRequest('get', 'shipments/' . $reference);
    }

    /**
     * Calls the shipment/list API endpoint and returns a result.
     *
     * @param string $query_params URL query params to filter by.
     * @return Response|Error
     */
    public function listShipment($query_params)
    {
        return $this->makeShiptheoryApiRequest('get', 'shipments/list' . $query_params);
    }

    /**
     * Calls the shipment/search API endpoint and returns a result.
     *
     * @param string $query_params URL query params to filter by.
     * @return Response|Error
     */
    public function searchShipment($query_params)
    {
        return $this->makeShiptheoryApiRequest('get', 'shipments/search' . $query_params);
    }

    /**
     * Create a new return label
     *
     * @param string $data json string of data.
     * @return Response|Error
     */
    public function createReturnLabel($data)
    {
        return $this->makeShiptheoryApiRequest('post', 'returns', $data);
    }

    /**
     * Get a list of outgoing delivery services.
     *
     * @return Response|Error
     */
    public function getOutgoingDeliveryServices()
    {
        return $this->makeShiptheoryApiRequest('get', 'services');
    }

    /**
     * Get a list of incoming delivery services.
     *
     * @return Response|Error
     */
    public function getIncomingDeliveryServices()
    {
        return $this->makeShiptheoryApiRequest('get', 'services/incoming');
    }

    /**
     * Get a list of package sizes.
     *
     * @return Response|Error
     */
    public function getPackageSizes($query_params)
    {
        return $this->makeShiptheoryApiRequest('get', 'packages/sizes' . $query_params);
    }

    /**
     * Add a new product.
     *
     * @param string $data json string of data.
     * @return Response|Error
     */
    public function addProduct($data)
    {
        return $this->makeShiptheoryApiRequest('post', 'products', $data);
    }

    /**
     * Update a product.
     *
     * @param string $data json string of data.
     * @return Response|Error
     */
    public function updateProduct($sku, $data)
    {
        return $this->makeShiptheoryApiRequest('put', 'products/update/' . $sku, $data);
    }

    /**
     * View a product from your product catalouge.
     *
     * @param string $sku The unique product SKU.
     * @return Response|Error
     */
    public function viewProduct($sku)
    {
        return $this->makeShiptheoryApiRequest('get', 'products/view/' . $sku);
    }

    /**
     * View a list of products from your product catalouge.
     *
     * @param string $sku The unique product SKU.
     * @return Response|Error
     */
    public function listProducts($query_params)
    {
        return $this->makeShiptheoryApiRequest('get', 'products' . $query_params);
    }
}
