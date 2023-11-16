<?php

namespace Lenra\App;

use GuzzleHttp\Client;
use JsonMapper\JsonMapperInterface;
use OpenAPI\Client\Api\DataApi as ApiDataApi;
use OpenAPI\Client\Configuration;

class Api
{
    private DataApi $data;

    public function __construct($req)
    {
        error_log("create API client configuration");
        $config = Configuration::getDefaultConfiguration()->setAccessToken($req->token)->setHost($req->url);
        error_log("create Data API");
        $this->data = new DataApi(
            new ApiDataApi(
                new Client(),
                $config
            )
        );
    }

    public function data(): DataApi
    {
        return $this->data;
    }

    public function db(): DataApi
    {
        return $this->data;
    }
}

class Collection
{
    private $api;
    private $name;

    public function __construct(AbstractDataApi $api, string $name)
    {
        $this->api = $api;
        $this->name = $name;
    }

    // CRUD
    public function getDoc(string $id)
    {
        return $this->api->api->getDocumentByIdAsync($this->name, $id);
    }

    public function createDoc($doc)
    {
        return $this->api->api->createDocumentAsync($this->name, $doc);
    }

    public function updateDoc($doc)
    {
        return $this->api->api->updateDocumentByIdAsync($this->name, $doc->_id, $doc);
    }

    public function deleteDoc(string $id)
    {
        return $this->api->api->deleteDocumentByIdAsync($this->name, $id);
    }

    // Mongo functions
    public function find($query, $projection)
    {
        return $this->api->api->findDocumentsAsync(
            $this->name,
            [
                'query' => $query,
                'projection' => $projection
            ]
        );
    }

    public function updateMany($filter, $update)
    {
        return $this->api->api->updateManyDocumentsAsync(
            $this->name,
            [
                'filter' => $filter,
                'update' => $update
            ]
        );
    }
}

class TypedCollection
{
    private $collection;
    private $collClass;
    public function __construct(AbstractDataApi $api, string $collClass)
    {
        $this->collection = new Collection($api, DataApi::collectionName($collClass));
        $this->collClass = $collClass;
    }

    public function getDoc($id)
    {
        $resp = $this->collection->getDoc($id);
        return AbstractDataApi::fromJson($this->collClass, $resp['data']);
    }

    public function createDoc($doc)
    {
        $resp = $this->collection->createDoc($doc);
        return AbstractDataApi::fromJson($this->collClass, $resp['data']);
    }

    public function updateDoc($doc)
    {
        $resp = $this->collection->updateDoc($doc);
        return AbstractDataApi::fromJson($this->collClass, $resp['data']);
    }

    public function deleteDoc($doc)
    {
        return $this->collection->deleteDoc($doc->_id);
    }

    public function find($query)
    {
        $resp = $this->collection->find($query, []);
        return array_map(function ($d) {
            return AbstractDataApi::fromJson($this->collClass, $d);
        }, $resp['data']);
    }

    public function updateMany($filter, $update)
    {
        $this->collection->updateMany($filter, $update);
    }
}

abstract class AbstractDataApi
{
    private static JsonMapperInterface $mapper;

    private $collections = [];
    private $typedCollections = [];
    public function __construct(public ApiDataApi $api)
    {
    }

    // public function headers()
    // {
    //     return array('Authorization' => 'Bearer ' . $this->api->token);
    // }

    public function coll($nameOrClass)
    {
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

    public static function fromJson($dataClass, $data)
    {
        return self::$mapper->mapObject($data, new ($dataClass)());
        // $result = new $dataClass();
        // foreach ($data as $index => $value) {
        //     if (property_exists($result, $index)) {
        //         $result->$index = $value;
        //     }
        // }
        // return $result;
    }
}

class DataApi extends AbstractDataApi
{
    public function startTransaction()
    {
        return $this->api->createTransactionAsync()
            ->then(function ($resp) {
                $config = Configuration::getDefaultConfiguration()->setAccessToken($resp['data'])->setHost($this->api->getConfig()->getHost());
                return new Transaction(
                    new ApiDataApi(
                        new Client(),
                        $config
                    ),
                    $resp['data']
                );
            });
    }

    public static function dataCollection($data)
    {
        return self::collectionName(get_class($data));
    }

    public static function collectionName($dataClass)
    {
        return strtolower($dataClass->getName());
    }
}

class Transaction extends AbstractDataApi
{
    public function __construct($api)
    {
        parent::__construct($api);
    }

    public function commit()
    {
        return $this->api->commitTransactionAsync();
    }

    public function abort()
    {
        return $this->api->abortTransactionAsync();
    }
}
