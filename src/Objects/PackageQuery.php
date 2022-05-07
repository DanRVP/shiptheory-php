<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\QueryInterface;
use Shiptheory\Util\QueryTrait;

class PackageQuery implements QueryInterface
{
    use QueryTrait;

    protected $valid_fields = [
        'id',
        'name',
        'lenght',
        'width',
        'height',
        'active',
        'limit',
    ];
}
