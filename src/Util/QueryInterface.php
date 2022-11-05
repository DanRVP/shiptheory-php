<?php

namespace Shiptheory\Util;

interface QueryInterface
{
    public function __construct($fields = []);

    public function toQueryParams($strict = true);

    public function addFields($fields);

    public function getFields();

    public function setFields($fields);
}
