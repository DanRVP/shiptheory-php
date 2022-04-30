<?php

namespace Shiptheory\Objects;

class SearchShipmentQuery extends ShipmentQuery
{
    const EXTRA_VALID_FIELDS = [
        'include_products'
    ];

    public function __construct(array $fields)
    {
        parent::__construct($fields);
        $this->addExtraValidFields(self::EXTRA_VALID_FIELDS);
    }
}