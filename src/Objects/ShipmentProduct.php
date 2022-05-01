<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class ShipmentProduct extends SharedProduct
{
    use ObjectTrait;

    /**
     * @var float
     */
    protected $value;

    /**
     * Get the value of value
     *
     * @return  float
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @param  float  $value
     */ 
    public function setValue(float $value = null)
    {
        $this->value = $value;
    }
}
