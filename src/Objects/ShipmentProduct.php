<?php

namespace Shiptheory\Objects;

class ShipmentProduct extends SharedProduct
{
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
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }
}
