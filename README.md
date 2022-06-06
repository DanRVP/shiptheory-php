# Shiptheory Python API Client

API client to communicate with the Shiptheory API.

The workflow is similar for all endpoints, queries and bookings. Examples exist in the file `test.py`. If you want to see all endpoint methods, then look in `ShiptheoryPython\Http\ShiptheoryClient.py`.

## Installation
Use pip:
```
pip install shiptheory-python
```

## Example of viewing a shipment
```python
client = ShiptheoryClient('test@test.com', 'Password')
result = client.viewShipment('Test1234')
```

## Example of listing shipments
```python
client = ShiptheoryClient('test@test.com', 'Password')
list_fields = {
    'channel_name': 'Api',
    'status': 'Ignored',
    'limit': 1
}

query = ListShipmentQuery(list_fields)
params = query.toQueryParams()
result = client.listShipment(params)
```

## Example of searching for shipments
```python
client = ShiptheoryClient('test@test.com', 'Password')
search_fields = {
    'created_from': '2022-04-01',
    'created_to': '2022-04-30',
    'include_products': 1,
}

query = SearchShipmentQuery(search_fields)
params = query.toQueryParams()
result = client.searchShipment(params)
```

## Example of booking a shipment
```python
client = ShiptheoryClient('test@test.com', 'Password')

shipment_detail = ShipmentDetail()
shipment_detail.weight = 1
shipment_detail.parcels = 1
shipment_detail.value = 2
shipment_detail.shipping_price = 2.99
shipment_detail.reference3 = 'ORDERREF3'
shipment_detail.sales_source = 'eBay'
shipment_detail.ship_date = '2022-05-22'
shipment_detail.rules_metadata = 'custom string'

recipient = Recipient()
recipient.company = 'Shiptheory'
recipient.firstname = 'Test'
recipient.lastname = 'Customer'
recipient.address_line_1 = 'Unit 4.1 Paintworks'
recipient.address_line_2 = 'Bath Road'
recipient.city = 'Bristol'
recipient.county = 'Avon'
recipient.country = 'GB'
recipient.postcode = 'BS4 3EH'
recipient.email = 'recipient@test.com'
recipient.telephone = '01234567890'
recipient.mobile = '07734567890'
recipient.what3words = '///what.three.words'
eori = TaxNumber('GB205672212000', AddressTaxNumberTypes.EORI)
vat = TaxNumber('GB123456789', AddressTaxNumberTypes.VAT)
recipient.tax_numbers = [eori, vat]

sender = Sender()
sender.company = 'Shipper Inc'
sender.firstname = 'Test'
sender.lastname = 'Shipper'
sender.address_line_1 = 'Bristol Old Vic'
sender.address_line_2 = 'King Street'
sender.city = 'Bristol'
sender.county = 'Avon'
sender.country = 'GB'
sender.postcode = 'BS1 4ED'
sender.email = 'sender@test.com'
sender.telephone = '01234567890'
sender.mobile = '07734567890'

product = Product()
product.name = 'My Test Product'
product.sku = 'TestProd1'
product.qty = 1
product.value = 1
product.weight = 1
product.commodity_code = '8443991000'
product.commodity_manucountry = 'PL'

shipment = Shipment()
shipment.reference = 'S1546'
shipment.reference2 = 'O1445'
shipment.shipment_detail = shipment_detail
shipment.recipient = recipient
shipment.sender = sender
shipment.products = [product]

data = shipment.toJson()
result = client.bookShipment(data)
```
