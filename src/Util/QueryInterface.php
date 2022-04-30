<?php

namespace Shiptheory\Util;

interface QueryInterface
{
    public function toQueryParams(bool $strict = true);

    public function addFields(array $fields);

    public function getFields();

    public function setFields(array $fields = []);
}
