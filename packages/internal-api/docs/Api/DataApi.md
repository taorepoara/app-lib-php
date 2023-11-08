# OpenAPI\Client\DataApi

All URIs are relative to http://localhost:4001, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**abortTransaction()**](DataApi.md#abortTransaction) | **POST** /app-api/v1/data/transaction/abort | Aborts a transaction |
| [**commitTransaction()**](DataApi.md#commitTransaction) | **POST** /app-api/v1/data/transaction/commit | Commits a transaction |
| [**createDocument()**](DataApi.md#createDocument) | **POST** /app-api/v1/data/colls/{coll}/docs | Creates a document in database |
| [**createTransaction()**](DataApi.md#createTransaction) | **POST** /app-api/v1/data/transaction | Creates a transaction |
| [**deleteCollection()**](DataApi.md#deleteCollection) | **DELETE** /app-api/v1-api/v1/data/colls/{coll} | Deletes a collection from database |
| [**deleteDocumentById()**](DataApi.md#deleteDocumentById) | **DELETE** /app-api/v1/data/colls/{coll}/docs/{id} | Deletes a document from database |
| [**findDocuments()**](DataApi.md#findDocuments) | **POST** /app-api/v1/data/colls/{coll}/find | Finds documents in database |
| [**getDocumentById()**](DataApi.md#getDocumentById) | **GET** /app-api/v1/data/colls/{coll}/docs/{id} | Gets a document from database |
| [**getDocuments()**](DataApi.md#getDocuments) | **GET** /app-api/v1/data/colls/{coll}/docs | Gets documents from database |
| [**updateDocumentById()**](DataApi.md#updateDocumentById) | **PUT** /app-api/v1/data/colls/{coll}/docs/{id} | Updates a document in database |
| [**updateManyDocuments()**](DataApi.md#updateManyDocuments) | **POST** /app-api/v1/data/colls/{coll}/updateMany | Updates many documents in database |


## `abortTransaction()`

```php
abortTransaction()
```

Aborts a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->abortTransaction();
} catch (Exception $e) {
    echo 'Exception when calling DataApi->abortTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commitTransaction()`

```php
commitTransaction()
```

Commits a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->commitTransaction();
} catch (Exception $e) {
    echo 'Exception when calling DataApi->commitTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocument()`

```php
createDocument($coll, $body): \OpenAPI\Client\Model\DataDocument
```

Creates a document in database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name
$body = array('key' => new \stdClass); // object | The document to create

try {
    $result = $apiInstance->createDocument($coll, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |
| **body** | **object**| The document to create | |

### Return type

[**\OpenAPI\Client\Model\DataDocument**](../Model/DataDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransaction()`

```php
createTransaction(): string
```

Creates a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createTransaction();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCollection()`

```php
deleteCollection($coll)
```

Deletes a collection from database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name

try {
    $apiInstance->deleteCollection($coll);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocumentById()`

```php
deleteDocumentById($coll, $id): \OpenAPI\Client\Model\DataDocument
```

Deletes a document from database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name
$id = 'id_example'; // string | The document identifier

try {
    $result = $apiInstance->deleteDocumentById($coll, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->deleteDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |
| **id** | **string**| The document identifier | |

### Return type

[**\OpenAPI\Client\Model\DataDocument**](../Model/DataDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findDocuments()`

```php
findDocuments($coll, $find_documents_request): \OpenAPI\Client\Model\DataDocument[]
```

Finds documents in database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name
$find_documents_request = new \OpenAPI\Client\Model\FindDocumentsRequest(); // \OpenAPI\Client\Model\FindDocumentsRequest | The query to find documents

try {
    $result = $apiInstance->findDocuments($coll, $find_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->findDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |
| **find_documents_request** | [**\OpenAPI\Client\Model\FindDocumentsRequest**](../Model/FindDocumentsRequest.md)| The query to find documents | |

### Return type

[**\OpenAPI\Client\Model\DataDocument[]**](../Model/DataDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentById()`

```php
getDocumentById($coll, $id): \OpenAPI\Client\Model\DataDocument
```

Gets a document from database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name
$id = 'id_example'; // string | The document identifier

try {
    $result = $apiInstance->getDocumentById($coll, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |
| **id** | **string**| The document identifier | |

### Return type

[**\OpenAPI\Client\Model\DataDocument**](../Model/DataDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocuments()`

```php
getDocuments($coll): \OpenAPI\Client\Model\DataDocument[]
```

Gets documents from database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name

try {
    $result = $apiInstance->getDocuments($coll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |

### Return type

[**\OpenAPI\Client\Model\DataDocument[]**](../Model/DataDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocumentById()`

```php
updateDocumentById($coll, $id, $data_document): \OpenAPI\Client\Model\DataDocument
```

Updates a document in database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name
$id = 'id_example'; // string | The document identifier
$data_document = new \OpenAPI\Client\Model\DataDocument(); // \OpenAPI\Client\Model\DataDocument | The document to update

try {
    $result = $apiInstance->updateDocumentById($coll, $id, $data_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->updateDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |
| **id** | **string**| The document identifier | |
| **data_document** | [**\OpenAPI\Client\Model\DataDocument**](../Model/DataDocument.md)| The document to update | |

### Return type

[**\OpenAPI\Client\Model\DataDocument**](../Model/DataDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManyDocuments()`

```php
updateManyDocuments($coll, $update_many_documents_request): object
```

Updates many documents in database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coll = 'coll_example'; // string | The document collection name
$update_many_documents_request = new \OpenAPI\Client\Model\UpdateManyDocumentsRequest(); // \OpenAPI\Client\Model\UpdateManyDocumentsRequest | The query to find documents

try {
    $result = $apiInstance->updateManyDocuments($coll, $update_many_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->updateManyDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coll** | **string**| The document collection name | |
| **update_many_documents_request** | [**\OpenAPI\Client\Model\UpdateManyDocumentsRequest**](../Model/UpdateManyDocumentsRequest.md)| The query to find documents | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
