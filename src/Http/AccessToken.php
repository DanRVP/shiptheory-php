<?php

namespace Shiptheory\Http;

class AccessToken
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var \DateTime
     */
    protected $age;

    public function __construct($token, $age)
    {
        $this->setToken($token)->setAge($age);
    }

    /**
     * Get the value of token
     *
     * @return  string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @param  string  $token
     *
     * @return  self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return  \DateTime
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param  \DateTime  $age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}
