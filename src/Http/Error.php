<?php

namespace Shiptheory\Http;

class Error
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @var int
     */
    protected $code;

    public function __construct($message = null, $code = null)
    {
        $this->setCode($code);
        $this->setMessage($message);
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
     * Get the value of message
     *
     * @return  string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of mesasge
     *
     * @param  string  $message
     *
     * @return  self
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }
}
