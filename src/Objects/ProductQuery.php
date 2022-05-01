<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\QueryInterface;
use Shiptheory\Util\QueryTrait;

class ProductQuery implements QueryInterface
{
    use QueryTrait;

    protected $fields = [];
    protected $valid_fields = [
        'limit',
        'sku',
        'name',
        'price',
        'weight',
        'created',
        'modified',
    ];
}
