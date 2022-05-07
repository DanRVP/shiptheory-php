<?php

namespace Shiptheory\Util;

trait QueryTrait
{
    /**
     * @var array
     */
    protected $fields = [];

    public function __construct(array $fields)
    {
        $this->setFields($fields);
    }

    /**
     * Convert the current array of fields to a query params string. 
     * 
     * @param bool $strict If enabled then invalid fields will be stripped.
     * @return string
     */
    public function toQueryParams(bool $strict = true)
    {
        if (empty($this->fields)) {
            return '';
        }

        $fields = $this->fields;
        if ($strict) {
            $fields = array_filter($fields, function ($value, $key) {
                return in_array($key, $this->valid_fields) && !empty($value);
            }, ARRAY_FILTER_USE_BOTH);
        }

        return $this->buildQuery($fields);
    }

    /**
     * Builds a query params string which does not follow RFC1738 or RFC3986 encoding
     * so spaces appear as spaces. 
     * 
     * @param array $fields
     * @return string
     */
    protected function buildQuery(array $fields)
    {
        $query_string = '?';
        return $query_string .= implode('&', array_map(fn($key, $value) => "$key=$value", array_keys($fields), $fields));
    }

    /**
     * Adds extra fields to the current field list.
     * 
     * @param array $fields Fields to add.
     */
    public function addFields(array $fields) {
        $this->fields = array_merge($this->fields, $fields);
    }

    /**
     * Adds extra fields to the valid fields list.
     * 
     * @param array $fields Fields to add.
     */
    protected function addExtraValidFields(array $fields)
    {
        $this->valid_fields = array_merge($this->valid_fields, $fields);
    }

    /**
     * Get the value of fields
     */ 
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set the value of fields
     *
     * @param array
     */ 
    public function setFields(array $fields = [])
    {
        $this->fields = $fields;
    }
}
