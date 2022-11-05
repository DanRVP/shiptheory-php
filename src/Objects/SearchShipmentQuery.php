<?php

namespace Shiptheory\Objects;

class SearchShipmentQuery extends ShipmentQuery
{
    const EXTRA_VALID_FIELDS = [
        'include_products',
        'created_from',
        'created_to',
    ];

    public function __construct($fields = [])
    {
        parent::__construct($fields);
        $this->addExtraValidFields(self::EXTRA_VALID_FIELDS);
    }
}
