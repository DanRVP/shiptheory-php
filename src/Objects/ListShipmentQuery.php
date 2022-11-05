<?php

namespace Shiptheory\Objects;

class ListShipmentQuery extends ShipmentQuery
{
    const EXTRA_VALID_FIELDS = [
        'created',
        'modified'
    ];

    public function __construct($fields = [])
    {
        parent::__construct($fields);
        $this->addExtraValidFields(self::EXTRA_VALID_FIELDS);
    }
}
