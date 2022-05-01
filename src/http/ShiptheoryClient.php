<?php

namespace Shiptheory\Http;

use DateTime;
use Shiptheory\Http\AccessToken;

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
     * @var
     */
    protected $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Get a new access token and save it into memory. 
     * 
     * @return bool
     */
    public function getAccessToken()
    {
        $data = [
            'email' => $this->username,
            'password' => $this->password,
        ];

        $api = new Api();
        $response = $api->post('token', json_encode($data));

        if ($response->getCode() == 200) {
            $token = json_decode($response->getBody())->data->token;
            $this->token = new AccessToken($token, new DateTime());
            return true;
        }

        return false;
    }

    /**
     * Checks to see if a token exists or has expired. If it has, then fetch a new one. 
     * 
     * @return bool
     */
    public function validateToken()
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
    private function checkTokenLifeExpired($token)
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
     * @return Response
     */
    public function bookShipment(string $data)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->post('shipments', $data);
    }

    /**
     * View a shipment 
     * 
     * @param string $reference The unique reference used when creating the shipment.
     * @return Response
     */
    public function viewShipment(string $reference) 
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->get('shipments/' . $reference);
    }

    /**
     * Calls the shipment/list API endpoint and returns a result.
     * 
     * @param string $query_params URL query params to filter by.
     * @return Response
     */
    public function listShipment(string $query_params)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->get('shipments/list' . $query_params);
    }

    /**
     * Calls the shipment/search API endpoint and returns a result.
     * 
     * @param string $query_params URL query params to filter by.
     * @return Response
     */
    public function searchShipment(string $query_params)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->get('shipments/search' . $query_params);
    }

    /**
     * Create a new return label 
     * 
     * @param string $data json string of data.
     * @return Response
     */
    public function createReturnLabel(string $data)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->post('returns', $data);
    }

    /**
     * Get a list of outgoing delivery services.
     * 
     * @return Response
     */
    public function getOutgoingDeliveryServices()
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->get('services');
    }

    /**
     * Get a list of incoming delivery services.
     * 
     * @return Response
     */
    public function getIncomingDeliveryServices()
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->get('services/incoming');
    }

    /**
     * Get a list of package sizes.
     * 
     * @return Response
     */
    public function getPackageSizes(string $query_params)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->get('packages/sizes' . $query_params);
    }

    /**
     * Add a new product. Products with SKUs already in ST will be updated.
     * 
     * @param string $data json string of data.
     * @return Response
     */
    public function addProduct(string $data)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->post('products', $data);
    }

    /**
     * View a product from your product catalouge.
     * 
     * @param string $sku The unique product SKU. 
     * @return Response
     */
    public function viewProduct(string $sku)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->get('products/' . $sku);
    }
}
