<?php

namespace Lenra\App;

use OpenAPI\Client\Configuration;

class Api {
    private string $url;
    private string $token;
    private Configuration $config;
    private DataApi $data;
    public function __construct($req) {
        // this.url = req.url;
        // this.token = req.token;
        // this.data = new DataApi(this);
        $config = Configuration::getDefaultConfiguration()->setAccessToken($req->token);
    }
}

abstract class ApiPart {
    protected $api;
    public function __construct($api) {
        $this->api = $api;
    }

    public function headers() {
        return array('Authorization' => 'Bearer ' . $this->api->token);
    }
}

class Collection {
    private $api;
    private $name;

    public function __construct(AbstractDataApi $api, string $name) {
        $this->api = $api;
        $this->name = $name;
    }

    // CRUD
    public function getDoc(string $id) {
        return $this->api->api->client->GET(
            "/app-api/v1/data/colls/{coll}/docs/{id}",
            [
                'params' => [
                    'path' => [
                        'coll' => $this->name,
                        'id' => $id
                    ]
                ],
                'headers' => $this->api->headers()
            ]
        );
    }

    public function createDoc($doc) {
        return $this->api->api->client->POST(
            "/app-api/v1/data/colls/{coll}/docs",
            [
                'params' => [
                    'path' => [
                        'coll' => $this->name
                    ]
                ],
                'body' => $doc,
                'headers' => $this->api->headers()
            ]
        );
    }

    public function updateDoc($doc) {
        return $this->api->api->client->PUT(
            "/app-api/v1/data/colls/{coll}/docs/{id}",
            [
                'params' => [
                    'path' => [
                        'coll' => $this->name,
                        'id' => $doc->_id
                    ]
                ],
                'body' => $doc,
                'headers' => $this->api->headers()
            ]
        );
    }

    public function deleteDoc(string $id) {
        return $this->api->api->client->DELETE(
            "/app-api/v1/data/colls/{coll}/docs/{id}",
            [
                'params' => [
                    'path' => [
                        'coll' => $this->name,
                        'id' => $id
                    ]
                ],
                'headers' => $this->api->headers()
            ]
        );
    }

    // Mongo functions
    public function find($query, $projection) {
        return $this->api->api->client->POST(
            "/app-api/v1/data/colls/{coll}/find",
            [
                'params' => [
                    'path' => [
                        'coll' => $this->name
                    ]
                ],
                'body' => [
                    'query' => $query,
                    'projection' => $projection
                ],
                'headers' => $this->api->headers()
            ]
        );
    }

    public function updateMany($filter, $update) {
        return $this->api->api->client->POST(
            "/app-api/v1/data/colls/{coll}/updateMany",
            [
                'params' => [
                    'path' => [
                        'coll' => $this->name
                    ]
                ],
                'body' => [
                    'filter' => $filter,
                    'update' => $update
                ],
                'headers' => $this->api->headers()
            ]
        );
    }
}

class TypedCollection {
    private $collection;
    public function __construct(AbstractDataApi $api, $collClass) {
        $this->collection = new Collection($api, DataApi::collectionName($collClass));
        $this->collClass = $collClass;
    }

    public function getDoc($id) {
        $resp = $this->collection->getDoc($id);
        return AbstractDataApi::fromJson($this->collClass, $resp['data']);
    }

    public function createDoc($doc) {
        $resp = $this->collection->createDoc($doc);
        return AbstractDataApi::fromJson($this->collClass, $resp['data']);
    }

    public function updateDoc($doc) {
        $resp = $this->collection->updateDoc($doc);
        return AbstractDataApi::fromJson($this->collClass, $resp['data']);
    }

    public function deleteDoc($doc) {
        $this->collection->deleteDoc($doc->_id);
    }

    public function find($query) {
        $resp = $this->collection->find($query, []);
        return array_map(function($d) {
            return AbstractDataApi::fromJson($this->collClass, $d);
        }, $resp['data']);
    }

    public function updateMany($filter, $update) {
        $this->collection->updateMany($filter, $update);
    }
}

abstract class AbstractDataApi extends ApiPart {
    private $collections = [];
    private $typedCollections = [];

    public function coll($nameOrClass) {
        if (is_string($nameOrClass)) {
            if (!isset($this->collections[$nameOrClass])) {
                $this->collections[$nameOrClass] = new Collection($this, $nameOrClass);
            }
            return $this->collections[$nameOrClass];
        } else {
            $name = DataApi::collectionName($nameOrClass);
            if (!isset($this->typedCollections[$name])) {
                $this->typedCollections[$name] = new TypedCollection($this, $nameOrClass);
            }
            return $this->typedCollections[$name];
        }
    }

    public static function fromJson($dataClass, $data) {
        $result = new $dataClass();
        foreach ($data as $index => $value) {
            if (property_exists($result, $index)) {
                $result->$index = $value;
            }
        }
        return $result;
    }
}

class DataApi extends AbstractDataApi {
    public function startTransaction(): Promise {
        return $this->api->client->POST(
            "/app-api/v1/data/transaction",
            [
                'headers' => $this->headers()
            ]
        )->then(function($resp) {
            return new Transaction($this->api, $resp['data']);
        });
    }

    public static function dataCollection($data) {
        return self::collectionName(get_class($data));
    }

    public static function collectionName($dataClass) {
        return strtolower($dataClass->getName());
    }
}

class Transaction extends AbstractDataApi {
    public $token;

    public function __construct($api, $token) {
        parent::__construct($api);
        $this->token = $token;
    }

    public function headers() {
        return ['Authorization' => 'Bearer ' . $this->token];
    }

    public function commit() {
        $this->api->client->POST(
            "/app-api/v1/data/transaction/commit",
            [
                'headers' => $this->headers()
            ]
        );
    }

    public function abort() {
        $this->api->client->POST(
            "/app-api/v1/data/transaction/abort",
            [
                'headers' => $this->headers()
            ]
        );
    }
}


?>