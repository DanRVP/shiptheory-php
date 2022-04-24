<?php

namespace Shiptheory\Objects;

class Shipment 
{
    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $reference2;
    
    /**
     * @var string
     */
    protected $delivery_service;
    
    /**
     * @var string
     */
    protected $increment;

    /**
     * @var ShipmentDetail
     */
    protected $shipment_detail;

    /**
     * Get the value of reference2
     *
     * @return  string
     */ 
    public function getReference2()
    {
        return $this->reference2;
    }

    /**
     * Set the value of reference2
     *
     * @param  string  $reference2
     *
     * @return  self
     */ 
    public function setReference2(string $reference2)
    {
        $this->reference2 = $reference2;
    }

    /**
     * Get the value of reference
     *
     * @return  string
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @param  string  $reference
     *
     * @return  self
     */ 
    public function setReference(string $reference)
    {
        $this->reference = $reference;
    }

    /**
     * Get the value of delivery_service
     *
     * @return  string
     */ 
    public function getDelivery_service()
    {
        return $this->delivery_service;
    }

    /**
     * Set the value of delivery_service
     *
     * @param  string  $delivery_service
     *
     * @return  self
     */ 
    public function setDelivery_service(string $delivery_service)
    {
        $this->delivery_service = $delivery_service;
    }

    /**
     * Get the value of increment
     *
     * @return  string
     */ 
    public function getIncrement()
    {
        return $this->increment;
    }

    /**
     * Set the value of increment
     *
     * @param  string  $increment
     *
     * @return  self
     */ 
    public function setIncrement(string $increment)
    {
        $this->increment = $increment;
    }

    /**
     * Get the value of shipment_detail
     *
     * @return  ShipmentDetail
     */ 
    public function getShipment_detail()
    {
        return $this->shipment_detail;
    }

    /**
     * Set the value of shipment_detail
     *
     * @param  ShipmentDetail  $shipment_detail
     *
     * @return  self
     */ 
    public function setShipment_detail(ShipmentDetail $shipment_detail)
    {
        $this->shipment_detail = $shipment_detail;
    }
}
