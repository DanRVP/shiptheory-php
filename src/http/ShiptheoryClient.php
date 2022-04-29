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

    public function validateToken()
    {
        if (empty($this->token) || $this->checkTokenLifeExpired($this->token)) {
            return $this->getAccessToken($this->username, $this->password);
        }

        return true;
    }

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

    public function bookShipment($data)
    {
        if (!$this->validateToken()) {
            return false;
        }

        $api = new Api($this->token->getToken());
        return $api->post('shipments', $data);
    }

    public function viewShipment($reference) 
    {

    }
}
