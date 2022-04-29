<?php

namespace Shiptheory\Util;

use Shiptheory\Util\ObjectInterface;

trait ObjectTrait
{
    /**
     * Converts deeply nested objects, which are instances 
     * of ObjectInterface, to an array.
     *
     * @return array
     */
    public function toArray($remove_null_fields = false)
    {
        $array = [];
        $vars = get_object_vars($this);

        foreach ($vars as $key => $value) {
            if($value instanceof ObjectInterface) {
                $array[$key] = $value->toArray($remove_null_fields);
            } else if (is_array($value)) {
                foreach ($value as $k => $v) {
                    $array[$key][$k] = $v->toArray($remove_null_fields);
                }
            } else if ($remove_null_fields && $value == null) {
                continue;
            } else {
                $array[$key] = $value;
            }
        }

        return $array;
    }

    /**
     * Removes a property from this object
     *
     * @param string $name Name of property to remove
     * @return void
     */
    public function removeProperty($name)
    {
        unset($this->{$name});
    }
}
