<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\QueryInterface;
use Shiptheory\Util\QueryTrait;

class ProductQuery implements QueryInterface
{
    use QueryTrait;
    
    protected $valid_fields = [
        'limit',
        'sort',
    ];
}
