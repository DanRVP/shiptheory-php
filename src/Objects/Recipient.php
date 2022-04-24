<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheotry\Util\ObjectInterface;

class Recipient extends Address implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var TaxNumbers
     */
    protected $tax_numbers;

    /**
     * Get the value of tax_numbers
     *
     * @return  TaxNumbers
     */ 
    public function getTax_numbers()
    {
        return $this->tax_numbers;
    }

    /**
     * Set the value of tax_numbers
     *
     * @param  TaxNumbers  $tax_numbers
     */ 
    public function setTax_numbers(TaxNumbers $tax_numbers)
    {
        $this->tax_numbers = $tax_numbers;
    }
}
