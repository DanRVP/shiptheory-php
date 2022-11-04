
API client to communicate with the Shiptheory API.

## Features
- Build Shiptheory request bodies and queries with ease.
- Dedicated methods to query each Shiptheory endpoint.
- Automatic token authentication. Just provide your credentials and the library will keep your tokens valid for as long as you need.
- Standardised error messaging.
- Configuration via .env

## Installation
Require with composer:
```
composer require dan-rogers/shiptheory-php
```

## Configuration
The library currently utilises a .env file to configure certain aspects of the application. 

IMPORTANT: It does not use any version of phpdotenv and instead uses its own custom implementation to keep it lightweight.

Copy values from `.env.example` into a new or existing .env file in the root of your project.

Currently supported configuration options:
- SHIPTHEORY_PHP_LOG_REQUESTS - (Boolean) When set to `true` requests are logged. When `false` or nonexistent requests are not logged.
- SHIPTHEORY_PHP_SSL_VERIFY_PEER - (Boolean) When set to `true` SSL verification is enabled. When `false` or nonexistent requests do not use SSL verification. 

## Usage
The workflow is similar for all endpoints, queries and bookings. Examples exist in the file `Examples`. If you want to see all endpoint methods, then look in `src/Http/ShiptheoryClient.php`.

It is recommended that you use the objects provied to build your requests as they will result with a perfect request body every time. However, if you wish you can just provide the query parameters or the JSON body (depending on request type) as a string to the method you are calling. 

## Example of viewing a shipment
```php
$client = new ShiptheoryClient('test@test.com', 'Password123!');
$result = $client->viewShipment('Test1234')
```

## Example of listing shipments
```php
$client = new ShiptheoryClient('test@test.com', 'Password123!');
$list_fields = [
    'channel_name' => 'Api',
    'status' => 'Ignored',
    'limit' => 1
];
$list_query = new ListShipmentQuery($list_fields);
$params = $list_query->toQueryParams();
$client->listShipment($params);
```

## Example of searching for shipments
```php
$client = new ShiptheoryClient('test@test.com', 'Password123!');
$search_fields = [
    'created_from' => '2022-04-01',
    'created_to' => '2022-04-30',
    'include_products' => 1,
];
$search_query = new SearchShipmentQuery($search_fields);
$params = $search_query->toQueryParams();
$client->searchShipment($params);
```

## Example of booking a shipment
```php
$client = new ShiptheoryClient('test@test.com', 'Password123!');
//Start new shipment data object
$shipment = new Shipment();
$shipment->setReference('Test1234');
$shipment->setReference2('Test5678');

// Set Shipment Details
$shipment_detail = new ShipmentDetail();
$shipment_detail->setWeight(1);
$shipment_detail->setParcels(1);
$shipment_detail->setValue(1);
$shipment_detail->setShippingPrice(2.99);
$shipment_detail->setReference3('ORDERREF3');
$shipment_detail->setSalesSource('My Store');
$shipment_detail->setShipDate('2022-04-30');
$shipment_detail->setCurrencyCode('GBP');

// Set Recipient
$reciever = new Recipient();
$reciever->setCompany('Shiptheory');
$reciever->setFirstname('Test');
$reciever->setLastname('Customer');
$reciever->setAddressLine1('Unit 4.1 Paintworks');
$reciever->setAddressLine2('Bath Road');
$reciever->setCity('Bristol');
$reciever->setCountry('GB');
$reciever->setPostcode('BS4 3EH');
$reciever->setEmail('recipient@test.com');
$reciever->setTelephone('01234567890');
$reciever->setWhat3Words('///what.three.words');
$eori = new TaxNumber('GB205672212000', AddressTaxNumberTypes::EORI);
$vat = new TaxNumber('GB123456789', AddressTaxNumberTypes::VAT);
$reciever->setTaxNumbers([$eori, $vat]);

// Set sender
$sender = new Sender();
$sender->setCompany('Shiptheory');
$sender->setFirstname('Test');
$sender->setLastname('Shipper');
$sender->setAddressLine1('Bristol Old Vic');
$sender->setAddressLine2('King Street');
$sender->setCity('Bristol');
$sender->setCountry('GB');
$sender->setPostcode('BS1 4ED');
$sender->setEmail('sender@test.com');
$sender->setTelephone('01234567890');

// Set Product
$product = new Product();
$product->setName('My Test Product');
$product->setSku('TestProd1');
$product->setQty(1);
$product->setValue(1);
$product->setWeight(1);
$product->setCommodityCode('8443991000');
$product->setCommodityManucountry('PL');

// Add all elements to the shipment
$shipment->setShipmentDetail($shipment_detail);
$shipment->setRecipient($reciever);
$shipment->setSender($sender);
$shipment->setProducts([$product]);

// Send shipment to Shiptheory
$data = $shipment->toJson(true);
$result = $client->bookShipment($data);
```
