# Shiptheory PHP API Client

API client to communicate with the Shiptheory API

## Example of viewing a shipment
```php
$client = new ShiptheoryClient('test@test.com', 'Password123!');
$result = $client->viewShipment('Test1234')
```

## Example of booking a shipment
```php
$client = new ShiptheoryClient('test@test.com', 'Password123!');
$client->getAccessToken();

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
$data = $shipment->toArray(true);
$result = $client->bookShipment(json_encode($data));
```
