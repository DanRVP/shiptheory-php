<?php

namespace Shiptheory\Http;

class Response
{
    /**
     * @var string
     */
    protected $body;

    /**
     * @var int
     */
    protected $code;

    /**
     * @var string
     */
    protected $error;

    public function __construct($body = null, $code = null)
    {
        $this->setBody($body);
        $this->setCode($code);
    }

    /**
     * Get the value of body
     *
     * @return  string
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @param  string  $body
     *
     * @return  self
     */ 
    public function setBody(string $body = null)
    {
        $this->body = $body;
    }

    /**
     * Get the value of code
     *
     * @return  int
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @param  int  $code
     *
     * @return  self
     */ 
    public function setCode(int $code = null)
    {
        $this->code = $code;
    }

    /**
     * Get the value of error
     *
     * @return  string
     */ 
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @param  string  $error
     *
     * @return  self
     */ 
    public function setError(string $error)
    {
        $this->error = $error;
    }
}
