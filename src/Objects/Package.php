<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectTrait;
use Shiptheory\Util\ObjectInterface;

class Package implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var float
     */
    protected $weight;

    /**
     * Get the value of id
     *
     * @return  integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  integer  $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}
