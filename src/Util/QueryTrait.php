<?php

namespace Shiptheory\Util;

trait QueryTrait
{
    public function __construct(array $fields)
    {
        $this->setFields($fields);
    }

    public function toQueryParams(bool $strict = true)
    {
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
     */
    private function buildQuery(array $fields)
    {
        $query_string = '?';
        $query_string .= implode('&', array_map(function ($value, $key) {
            return "$key=$value";
        }, $fields));
        return rtrim($query_string, '&');
    }

    public function addFields(array $fields) {
        $this->fields = array_merge($this->fields, $fields);
    }

    private function addExtraValidFields(array $fields)
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
     * @return  self
     */ 
    public function setFields($fields = [])
    {
        $this->fields = $fields;
    }
}
