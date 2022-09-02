<?php

namespace Shiptheory\Util;

interface ObjectInterface
{
    /**
     * Converts deeply nested objects, which are instances
     * of ObjectInterface, to an array.
     *
     * @return array
     */
    public function toArray($remove_null_fields = false);

    /**
     * Converts object to a json string.
     *
     * @param bool $remove_null_fields Remove all fields which evaluate as null.
     * @param bool $pretty_print Pretty print the JSON output by the method.
     * @return string
     */
    public function toJson($remove_null_fields = false, $pretty_print = false);

    /**
     * Removes a property from this object
     *
     * @param string $name Name of property to remove
     * @return void
     */
    public function removeProperty($name);
}
