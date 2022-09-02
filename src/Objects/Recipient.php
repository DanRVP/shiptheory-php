<?php

namespace Shiptheory\Objects;

class Recipient extends Address
{
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
    public function setTaxNumbers($tax_numbers = [])
    {
        $this->tax_numbers = $tax_numbers;
    }

    /**
     * Add a new Tax number to the array
     *
     * @param TaxNumber $tax_number
     */
    public function addTaxNumber($tax_number)
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
    public function setWhat3Words($what3words)
    {
        $this->what3words = $what3words;
    }
}
