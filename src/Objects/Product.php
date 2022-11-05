<?php

namespace Shiptheory\Objects;


class Product extends SharedProduct
{
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
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
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
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
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
    public function setCommodityComposition($commodity_composition)
    {
        $this->commodity_composition = $commodity_composition;

        return $this;
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
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
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
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
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
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}
