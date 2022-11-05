<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class Address implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $firstname;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var string
     */
    protected $address_line_1;

    /**
     * @var string
     */
    protected $address_line_2;

    /**
     * @var string
     */
    protected $address_line_3;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $county;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $postcode;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $tax_number;

    /**
     * Get the value of company
     *
     * @return  string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of company
     *
     * @param  string  $company
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of firstname
     *
     * @return  string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param  string  $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return  string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param  string  $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of address_line_1
     *
     * @return  string
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }

    /**
     * Set the value of address_line_1
     *
     * @param  string  $address_line_1
     */
    public function setAddressLine1($address_line_1)
    {
        $this->address_line_1 = $address_line_1;

        return $this;
    }

    /**
     * Get the value of address_line_2
     *
     * @return  string
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }

    /**
     * Set the value of address_line_2
     *
     * @param  string  $address_line_2
     */
    public function setAddressLine2($address_line_2)
    {
        $this->address_line_2 = $address_line_2;

        return $this;
    }

    /**
     * Get the value of address_line_3
     *
     * @return  string
     */
    public function getAddressLine3()
    {
        return $this->address_line_3;
    }

    /**
     * Set the value of address_line_3
     *
     * @param  string  $address_line_3
     */
    public function setAddressLine3($address_line_3)
    {
        $this->address_line_3 = $address_line_3;

        return $this;
    }

    /**
     * Get the value of city
     *
     * @return  string;
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @param  string  $city
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of country
     *
     * @return  string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @param  string  $country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }


    /**
     * Get the value of postcode
     *
     * @return  string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set the value of postcode
     *
     * @param  string  $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  string  $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of mobile
     *
     * @return  string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set the value of mobile
     *
     * @param  string  $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     * Get the value of county
     *
     * @return  string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set the value of county
     *
     * @param  string  $county
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }
}
