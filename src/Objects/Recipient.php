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
     * @var string
     */
    protected $what3words;

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

    /**
     * Get the value of what3words
     *
     * @return  string
     */
    public function getWhat3Words()
    {
        return $this->what3words;
    }

    /**
     * Set the value of what3words
     *
     * @param  string  $what3words
     */
    public function setWhat3Words(string $what3words)
    {
        $this->what3words = $what3words;
    }
}
