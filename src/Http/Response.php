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
    protected $url;

    public function __construct($body = null, $code = null, $url = null)
    {
        $this->setBody($body)->setCode($code)->setUrl($url);
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
    public function setBody($body = null)
    {
        $this->body = $body;

        return $this;
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
    public function setCode($code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of url
     *
     * @return  string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @param  string  $url
     */
    public function setUrl($url = null)
    {
        $this->url = $url;

        return $this;
    }
}
