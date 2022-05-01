<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class Product extends SharedProduct
{
    use ObjectTrait;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $barcode;

    /**
     * @var string
     */
    protected $commodity_composition;

    /**
     * @var float
     */
    protected $length;

    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    /**
     * Get the value of price
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  float  $price
     */ 
    public function setPrice(float $price = null)
    {
        $this->price = $price;
    }

    /**
     * Get the value of barcode
     *
     * @return  string
     */ 
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set the value of barcode
     *
     * @param  string  $barcode
     */ 
    public function setBarcode(string $barcode = null)
    {
        $this->barcode = $barcode;
    }

    /**
     * Get the value of commodity_composition
     *
     * @return  string
     */ 
    public function getCommodityComposition()
    {
        return $this->commodity_composition;
    }

    /**
     * Set the value of commodity_composition
     *
     * @param  string  $commodity_composition
     */ 
    public function setCommodityComposition(string $commodity_composition = null)
    {
        $this->commodity_composition = $commodity_composition;
    }

    /**
     * Get the value of length
     *
     * @return  float
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @param  float  $length
     */ 
    public function setLength(float $length = null)
    {
        $this->length = $length;
    }

    /**
     * Get the value of width
     *
     * @return  float
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @param  float  $width
     */ 
    public function setWidth(float $width = null)
    {
        $this->width = $width;
    }

    /**
     * Get the value of height
     *
     * @return  float
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @param  float  $height
     */ 
    public function setHeight(float $height = null)
    {
        $this->height = $height;
    }
}
