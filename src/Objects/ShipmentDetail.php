<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class ShipmentDetail implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var integer
     */
    protected $parcels;

    /**
     * @var float
     */
    protected $value;

    /**
     * @var float
     */
    protected $shipping_price;

    /**
     * @var string
     */
    protected $reference3;

    /**
     * @var integer
     */
    protected $format_id;

    /**
     * @var string
     */
    protected $instructions;

    /**
     * @var string
     */
    protected $gift_message;

    /**
     * @var string
     */
    protected $channel_shipservice_name;

    /**
     * @var string
     */
    protected $currency_code;

    /**
     * @var string
     */
    protected $sales_source;

    /**
     * @var string
     */
    protected $ship_date;

    /**
     * @var string
     */
    protected $rules_metadata;

    /**
     * @var string
     */
    protected $duty_tax_number;

    /**
     * @var string Enum of TaxNumberTypes::TYPES
     */
    protected $duty_tax_number_type;

    /**
     * Get the value of parcels
     *
     * @return  integer
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * Set the value of parcels
     *
     * @param  integer  $parcels
     */
    public function setParcels($parcels)
    {
        $this->parcels = $parcels;
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
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

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
    public function setValue(float $value)
    {
        $this->value = $value;
    }

    /**
     * Get the value of shipping_price
     *
     * @return  float
     */
    public function getShippingPrice()
    {
        return $this->shipping_price;
    }

    /**
     * Set the value of shipping_price
     *
     * @param  float  $shipping_price
     */
    public function setShippingPrice(float $shipping_price)
    {
        $this->shipping_price = $shipping_price;
    }

    /**
     * Get the value of reference3
     *
     * @return  string
     */
    public function getReference3()
    {
        return $this->reference3;
    }

    /**
     * Set the value of reference3
     *
     * @param  string  $reference3
     */
    public function setReference3(string $reference3)
    {
        $this->reference3 = $reference3;
    }

    /**
     * Get the value of format_id
     *
     * @return  integer
     */
    public function getFormatId()
    {
        return $this->format_id;
    }

    /**
     * Set the value of format_id
     *
     * @param  integer  $format_id
     */
    public function setFormatId($format_id)
    {
        $this->format_id = $format_id;
    }

    /**
     * Get the value of instructions
     *
     * @return  string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set the value of instructions
     *
     * @param  string  $instructions
     */
    public function setInstructions(string $instructions)
    {
        $this->instructions = $instructions;
    }

    /**
     * Get the value of gift_message
     *
     * @return  string
     */
    public function getGiftMessage()
    {
        return $this->gift_message;
    }

    /**
     * Set the value of gift_message
     *
     * @param  string  $gift_message
     */
    public function setGiftMessage(string $gift_message)
    {
        $this->gift_message = $gift_message;
    }

    /**
     * Get string
     */
    public function getChannelShipserviceName()
    {
        return $this->channel_shipservice_name;
    }

    /**
     * Set string
     */
    public function setChannelShipserviceName($channel_shipservice_name)
    {
        $this->channel_shipservice_name = $channel_shipservice_name;
    }

    /**
     * Get the value of currency_code
     *
     * @return  string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Set the value of currency_code
     *
     * @param  string  $currency_code
     */
    public function setCurrencyCode(string $currency_code)
    {
        $this->currency_code = $currency_code;
    }

    /**
     * Get the value of sales_source
     *
     * @return  string
     */
    public function getSalesSource()
    {
        return $this->sales_source;
    }

    /**
     * Set the value of sales_source
     *
     * @param  string  $sales_source
     */
    public function setSalesSource(string $sales_source)
    {
        $this->sales_source = $sales_source;
    }

    /**
     * Get the value of ship_date
     *
     * @return string
     */
    public function getShipDate()
    {
        return $this->ship_date;
    }

    /**
     * Set the value of ship_date
     *
     * @param  string  $ship_date
     */
    public function setShipDate(string $ship_date)
    {
        $this->ship_date = $ship_date;
    }

    /**
     * Get the value of rules_metadata
     *
     * @return  string
     */
    public function getRulesMetadata()
    {
        return $this->rules_metadata;
    }

    /**
     * Set the value of rules_metadata
     *
     * @param  string  $rules_metadata
     */
    public function setRulesMetadata(string $rules_metadata)
    {
        $this->rules_metadata = $rules_metadata;
    }

    /**
     * Get the value of duty_tax_number
     *
     * @return  string
     */
    public function getDutyTaxNumber()
    {
        return $this->duty_tax_number;
    }

    /**
     * Set the value of duty_tax_number
     *
     * @param  string  $duty_tax_number
     */
    public function setDutyTaxNumber(string $duty_tax_number)
    {
        $this->duty_tax_number = $duty_tax_number;
    }

    /**
     * Get enum of TaxNumberTypes::TYPES
     *
     * @return  string
     */
    public function getDutyTaxNumberType()
    {
        return $this->duty_tax_number_type;
    }

    /**
     * Set enum of TaxNumberTypes::TYPES
     *
     * @param  string  $duty_tax_number_type  Enum of TaxNumberTypes::TYPES
     */
    public function setDutyTaxNumberType(string $duty_tax_number_type)
    {
        $this->duty_tax_number_type = $duty_tax_number_type;
    }
}
