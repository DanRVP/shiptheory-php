<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\ObjectInterface;
use Shiptheory\Util\ObjectTrait;

class ShipmentQuery implements ObjectInterface
{
    use ObjectTrait;

    /**
     * @var string
     */
    protected $created;

    /**
     * @var string
     */
    protected $modified;

    /**
     * @var string Enum of Status e.g. Status::READY
     */
    protected $status;

    /**
     * @var string
     */
    protected $channel_name;

    /**
     * @var string
     */
    protected $channel_reference_id;

    /**
     * @var string
     */
    protected $channel_reference_id_2;

    /**
     * Get the value of created
     *
     * @return  string
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @param  string  $created
     *
     * @return  self
     */ 
    public function setCreated(string $created = null)
    {
        $this->created = $created;
    }

    /**
     * Get the value of modified
     *
     * @return  string
     */ 
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set the value of modified
     *
     * @param  string  $modified
     *
     * @return  self
     */ 
    public function setModified(string $modified = null)
    {
        $this->modified = $modified;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */ 
    public function setStatus(string $status = null)
    {
        $this->status = $status;
    }

    /**
     * Get the value of channel_name
     *
     * @return  string
     */ 
    public function getChannelName()
    {
        return $this->channel_name;
    }

    /**
     * Set the value of channel_name
     *
     * @param  string  $channel_name
     *
     * @return  self
     */ 
    public function setChannelName(string $channel_name = null)
    {
        $this->channel_name = $channel_name;
    }

    /**
     * Get the value of channel_reference_id
     *
     * @return  string
     */ 
    public function getChannelReferenceId()
    {
        return $this->channel_reference_id;
    }

    /**
     * Set the value of channel_reference_id
     *
     * @param  string  $channel_reference_id
     *
     * @return  self
     */ 
    public function setChannelReferenceId(string $channel_reference_id = null)
    {
        $this->channel_reference_id = $channel_reference_id;
    }

    /**
     * Get the value of channel_reference_id_2
     *
     * @return  string
     */ 
    public function getChannelReferenceId2()
    {
        return $this->channel_reference_id_2;
    }

    /**
     * Set the value of channel_reference_id_2
     *
     * @param  string  $channel_reference_id_2
     *
     * @return  self
     */ 
    public function setChannelReferenceId2(string $channel_reference_id_2 = null)
    {
        $this->channel_reference_id_2 = $channel_reference_id_2;
    }
}
