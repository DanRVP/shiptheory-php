<?php

namespace Shiptheory\Objects;

use Shiptheory\Util\QueryInterface;
use Shiptheory\Util\QueryTrait;

class ShipmentQuery implements QueryInterface
{
    use QueryTrait;

    protected $fields = [];
    protected $valid_fields = [
        'limit',
        'status',
        'channel_name',
        'channel_reference_id',
        'channel_reference_id_2',
        'ShipmentDetails.parcels',
        'ShipmentDetails.weight',
        'ShipmentDetails.value',
        'ShipmentDetails.duty_tax_number',
        'ShipmentDetails.duty_tax_number_type',
        'Couriers.couriername',
        'Countries.code',
        'DeliveryAddress.address_line_1',
        'DeliveryAddress.address_line_2',
        'DeliveryAddress.address_line_3',
        'DeliveryAddress.city',
        'DeliveryAddress.county',
        'DeliveryAddress.postcode',
        'DeliveryAddress.telephone',
        'DeliveryAddress.email',
        'DeliveryAddress.company',
        'DeliveryAddress.firstname',
        'DeliveryAddress.lastname',
        'DeliveryAddress.tax_number',
    ];
}
   