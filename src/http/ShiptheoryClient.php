<?php

namespace Shiptheory\http;

class ShiptheoryClient
{
    protected $token;
    protected $username;
    protected $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getAccessToken($username, $password)
    {
        $data = [
            'email' => $username,
            'password' => $password,
        ];

        $api = new Api();
        return $api->post('token', json_encode($data));
    }

    private function validateToken()
    {
        if (empty($this->token)) {
            $result = $this->getAccessToken($this->username, $this->password);
            if (property_exists('success', $result)) {
                $this->token = $result->data->token;
                return true;
            }

            return false;
        }

        return true;
    }

    public function bookShipment($data)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token);
        return $api->post('shipments', $data);
    }

    public function viewShipment($reference) 
    {

    }
}