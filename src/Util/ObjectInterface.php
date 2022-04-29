<?php

namespace Shiptheory\Util;

interface ObjectInterface
{
    /**
     * Convert nested objects to an array
     */
    public function toArray();

    /**
     * Removes a property from this object
     *
     * @param string $name Name of property to remove
     * @return void
     */
    public function removeProperty($name);
}
