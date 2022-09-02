<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectInterface;
use Shiptheory\Util\ObjectTrait;

class ReturnLabel implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var string
     */
    protected $outgoing_reference;

    /**
     * @var string
     */
    protected $delivery_postcode;

    /**
     * @var integer
     */
    protected $return_service;

    /**
     * @var string
     */
    protected $expiry;

    /**
     * Get the value of outgoing_reference
     *
     * @return  string
     */
    public function getOutgoingReference()
    {
        return $this->outgoing_reference;
    }

    /**
     * Set the value of outgoing_reference
     *
     * @param  string  $outgoing_reference
     *
     * @return  self
     */
    public function setOutgoingReference($outgoing_reference)
    {
        $this->outgoing_reference = $outgoing_reference;
    }

    /**
     * Get the value of delivery_postcode
     *
     * @return  string
     */
    public function getDeliveryPostcode()
    {
        return $this->delivery_postcode;
    }

    /**
     * Set the value of delivery_postcode
     *
     * @param  string  $delivery_postcode
     */
    public function setDeliveryPostcode($delivery_postcode)
    {
        $this->delivery_postcode = $delivery_postcode;
    }

    /**
     * Get the value of return_service
     *
     * @return  integer
     */
    public function getReturnService()
    {
        return $this->return_service;
    }

    /**
     * Set the value of return_service
     *
     * @param  integer  $return_service
     */
    public function setReturnService($return_service)
    {
        $this->return_service = $return_service;
    }

    /**
     * Get the value of expiry
     *
     * @return  string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Set the value of expiry
     *
     * @param  string  $expiry
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;
    }
}
