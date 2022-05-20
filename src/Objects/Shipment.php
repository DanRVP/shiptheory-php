<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class Shipment implements ObjectInterface
{
    use ObjectTrait;

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
     * @var int
     */
    protected $increment;

    /**
     * @var ShipmentDetail
     */
    protected $shipment_detail;

    /**
     * @var Recipient
     */
    protected $recipient;

    /**
     * @var Sender
     */
    protected $sender;

    /**
     * @var Product[]
     */
    protected $products;

    /**
     * @var Package[]
     */
    protected $packages;

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
     */ 
    public function setReference2(string $reference2 = null)
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
     */ 
    public function setReference(string $reference = null)
    {
        $this->reference = $reference;
    }

    /**
     * Get the value of delivery_service
     *
     * @return  string
     */ 
    public function getDeliveryService()
    {
        return $this->delivery_service;
    }

    /**
     * Set the value of delivery_service
     *
     * @param  string  $delivery_service
     */ 
    public function setDeliveryService(string $delivery_service = null)
    {
        $this->delivery_service = $delivery_service;
    }

    /**
     * Get the value of increment
     *
     * @return  int
     */ 
    public function getIncrement()
    {
        return $this->increment;
    }

    /**
     * Set the value of increment
     *
     * @param  string  $increment
     */ 
    public function setIncrement(int $increment = null)
    {
        $this->increment = $increment;
    }

    /**
     * Get the value of shipment_detail
     *
     * @return  ShipmentDetail
     */ 
    public function getShipmentDetail()
    {
        return $this->shipment_detail;
    }

    /**
     * Set the value of shipment_detail
     *
     * @param  ShipmentDetail  $shipment_detail
     */ 
    public function setShipmentDetail(ShipmentDetail $shipment_detail = null)
    {
        $this->shipment_detail = $shipment_detail;
    }

    /**
     * Get the value of recipient
     *
     * @return  Recipient
     */ 
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set the value of recipient
     *
     * @param  Recipient  $recipient
     */ 
    public function setRecipient(Recipient $recipient = null)
    {
        $this->recipient = $recipient;
    }

    /**
     * Get the value of sender
     *
     * @return  Sender
     */ 
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set the value of sender
     *
     * @param  Sender  $sender
     */ 
    public function setSender(Sender $sender = null)
    {
        $this->sender = $sender;
    }

    /**
     * Get the value of products
     *
     * @return  array
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  array  $products
     */ 
    public function setProducts(array $products = null)
    {
        $this->products = $products;
    }

    /**
     * Get the value of packages
     *
     * @return  array
     */ 
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Set the value of packages
     *
     * @param  array  $packages
     */ 
    public function setPackages(array $packages = null)
    {
        $this->packages = $packages;
    }
}
