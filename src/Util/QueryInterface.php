<?php

namespace Shiptheory\Util;

interface QueryInterface
{
    public function toQueryParams($strict = true);

    public function addFields(array $fields);

    public function getFields();

    public function setFields(array $fields = []);
}
