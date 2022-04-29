<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class Recipient extends Address implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var TaxNumber[]
     */
    protected $tax_numbers;

    /**
     * Get the value of tax_numbers
     *
     * @return  TaxNumber[]
     */ 
    public function getTaxNumbers()
    {
        return $this->tax_numbers;
    }

    /**
     * Set the value of tax_numbers
     *
     * @param  TaxNumber[]  $tax_numbers
     */ 
    public function setTaxNumbers(array $tax_numbers = null)
    {
        $this->tax_numbers = $tax_numbers;
    }

    /**
     * Add a new Tax number to the array
     */
    public function addTaxNumber(TaxNumber $tax_number)
    {
        $this->tax_numbers[] = $tax_number;
    }
}
