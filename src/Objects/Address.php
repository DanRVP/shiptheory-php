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
    public function setCompany(string $company = null)
    {
        $this->company = $company;
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
    public function setFirstname(string $firstname = null)
    {
        $this->firstname = $firstname;
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
    public function setLastname(string $lastname = null)
    {
        $this->lastname = $lastname;
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
    public function setAddressLine1(string $address_line_1 = null)
    {
        $this->address_line_1 = $address_line_1;
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
    public function setAddressLine2(string $address_line_2 = null)
    {
        $this->address_line_2 = $address_line_2;
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
    public function setAddressLine3(string $address_line_3 = null)
    {
        $this->address_line_3 = $address_line_3;
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
     * @param  string;  $city
     */ 
    public function setCity(string $city = null)
    {
        $this->city = $city;
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
    public function setCountry(string $country = null)
    {
        $this->country = $country;
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
    public function setPostcode(string $postcode = null)
    {
        $this->postcode = $postcode;
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
    public function setTelephone(string $telephone = null)
    {
        $this->telephone = $telephone;
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
    public function setMobile(string $mobile = null)
    {
        $this->mobile = $mobile;
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
    public function setEmail(string $email = null)
    {
        $this->email = $email;
    }

    /**
     * Get the value of tax_number
     *
     * @return  string
     */ 
    public function getTax_number()
    {
        return $this->tax_number;
    }

    /**
     * Set the value of tax_number
     *
     * @param  string  $tax_number
     */ 
    public function setTax_number(string $tax_number = null)
    {
        $this->tax_number = $tax_number;
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
    public function setCounty(string $county)
    {
        $this->county = $county;
    }
}
