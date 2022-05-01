<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class SharedProduct implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var integer
     */
    protected $qty;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var string
     */
    protected $commodity_code;

    /**
     * @var string
     */
    protected $commodity_description;

    /**
     * @var string
     */
    protected $commodity_manucountry;

     /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     */ 
    public function setName(string $name = null)
    {
        $this->name = $name;
    }

    /**
     * Get the value of sku
     *
     * @return  string
     */ 
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set the value of sku
     *
     * @param  string  $sku
     */ 
    public function setSku(string $sku = null)
    {
        $this->sku = $sku;
    }

    /**
     * Get the value of qty
     *
     * @return  integer
     */ 
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set the value of qty
     *
     * @param  integer  $qty
     */ 
    public function setQty($qty = null)
    {
        $this->qty = $qty;
    }

    /**
     * Get the value of weight
     *
     * @return  float
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @param  float  $weight
     */ 
    public function setWeight(float $weight = null)
    {
        $this->weight = $weight;
    }

    /**
     * Get the value of commodity_code
     *
     * @return  string
     */ 
    public function getCommodityCode()
    {
        return $this->commodity_code;
    }

    /**
     * Set the value of commodity_code
     *
     * @param  string  $commodity_code
     */ 
    public function setCommodityCode(string $commodity_code = null)
    {
        $this->commodity_code = $commodity_code;
    }

    /**
     * Get the value of commodity_description
     *
     * @return  string
     */ 
    public function getCommodityDescription()
    {
        return $this->commodity_description;
    }

    /**
     * Set the value of commodity_description
     *
     * @param  string  $commodity_description
     */ 
    public function setCommodityDescription(string $commodity_description = null)
    {
        $this->commodity_description = $commodity_description;
    }

    /**
     * Get the value of commodity_manucountry
     *
     * @return  string
     */ 
    public function getCommodityManucountry()
    {
        return $this->commodity_manucountry;
    }

    /**
     * Set the value of commodity_manucountry
     *
     * @param  string  $commodity_manucountry
     */ 
    public function setCommodityManucountry(string $commodity_manucountry = null)
    {
        $this->commodity_manucountry = $commodity_manucountry;
    }
}