<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class TaxNumber implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var string
     */
    protected $tax_number;

    /**
     * @var string Enum of AddressTaxNumberTypes::TYPES
     */
    protected $tax_number_type;

    public function __construct($tax_number = null, $type = null)
    {
        $this->setTaxNumber($tax_number);
        $this->setTaxNumberType($type);
    }

    /**
     * Get the value of tax_number
     *
     * @return  string
     */
    public function getTaxNumber()
    {
        return $this->tax_number;
    }

    /**
     * Set the value of tax_number
     *
     * @param  string  $tax_number
     */
    public function setTaxNumber($tax_number)
    {
        $this->tax_number = $tax_number;

        return $this;
    }

    /**
     * Get enum of AddressTaxNumberTypes::TYPES
     *
     * @return  string
     */
    public function getTaxNumberType()
    {
        return $this->tax_number_type;
    }

    /**
     * Set enum of AddressTaxNumberTypes::TYPES
     *
     * @param  string  $tax_number_type  Enum of AddressTaxNumberTypes::TYPES
     */
    public function setTaxNumberType($tax_number_type)
    {
        $this->tax_number_type = $tax_number_type;

        return $this;
    }
}
