<?php

namespace mirolabs\redcart\client;


use mirolabs\collection\ArrayList;
use mirolabs\redcart\Client;

abstract class Module {



    private static $client;

    private static function getClient($key, $https)
    {
        if (is_null(self::$client)) {
            self::$client = new Client($key, $https);
        }

        return self::$client;
    }

    protected $module = "";

    protected $modelType = "";

    protected $indexName = "";

    protected $responseIndex = "";

    /**
     * @var Client
     */
    private $redcart;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * @param Repository $repository
     * @param $key
     * @param bool $https
     */
    public function __construct(Repository $repository, $key, $https = true)
    {
        $this->repository = $repository;
        $this->redcart = self::getClient($key, $https);
    }


    /**
     * @return int
     */
    public function getCount()
    {
        $response = $this->sendMethod('count', []);
        return (int)$response['count'];
    }

    /**
     * @param array $ids
     * @return ArrayList
     */
    public function selectIds(array $ids)
    {
        $response = $this->sendMethod('selectIds', [$this->indexName => $ids]);
        return $this->getObjects($response[$this->responseIndex]);
    }

    /**
     * @param array $parameters
     * @param $limit
     * @param $offset
     * @return ArrayList
     */
    public function select(array $parameters, $limit, $offset)
    {
        $response = $this->sendMethod('select', [$parameters], ['offset' => $offset, 'limit' => $limit]);
        return $this->getObjects($response[$this->responseIndex]);
    }

    /**
     * @param $index
     * @return null
     * @throws \mirolabs\collection\exceptions\InvalidIndexException
     */
    public function find($index)
    {
        $response = $this->select([$this->indexName => $index], 1, 0);
        if ($response->size() > 0) {
            return $response->get(0);
        }
        return null;
    }


    /**
     * @param ArrayList $list
     * @param array $options
     * @return ArrayList
     * @throws \Exception
     */
    public function create(ArrayList $list, array $options)
    {

        if ($list->size() > 0) {
            $params = $list->map(function($item) {return $item->toArray();});
            $response = $this->sendMethod('add', $params->toArray(), $options);
            if ($response['count'] != $list->size()) {
                throw new \Exception('Invalid Request');
            }
            for ($i = 0; $i < $response['count']; $i++) {
                $list->get($i)->setProductsId($response[$this->indexName][$i]);
            }
        }

        return $list;
    }

    /**
     * @param ArrayList $list
     * @param array $options
     * @return ArrayList
     * @throws \Exception
     */
    public function update(ArrayList $list, array $options)
    {
        if ($list->size() > 0) {
            $params = $list->map(function($item) {return $item->toArray();});
            $response = $this->sendMethod('update', $params->toArray(), $options);
            if ($response['count'] != $list->size()) {
                throw new \Exception('Invalid Request');
            }
        }

        return $list;
    }

    /**
     * @param array $indexes
     * @return null
     * @throws \Exception
     */
    public function delete(array $indexes)
    {
        if (count($indexes) > 0) {
            $response = $this->sendMethod('delete', [$this->indexName => $indexes]);
            if ($response['count'] != count($indexes)) {
                throw new \Exception('Invalid Request');
            }
        }
    }


    /**
     * @param $method
     * @param $parameters
     * @param null $options
     * @return mixed
     */
    protected function sendMethod($method, $parameters, $options = null)
    {
        $this->repository->notifyEvent('beforeSend', [
            "module" => $this->module,
            "method" => $method,
            "parameters" => $parameters,
            "options" => $options
        ]);
        $response = $this->redcart->call($this->module, $method, $parameters, $options);
        $this->repository->notifyEvent('responseMessage', $response);
        return $response;
    }

    /**
     * @param array $types
     * @return ArrayList
     */
    protected function getObjects(array $types)
    {
        return $this->repository->getObjects($types, $this->modelType);
    }

    /**
     * @param $type
     * @return Model
     */
    protected function getObject($type)
    {
        return $this->repository->getObject($type, $this->modelType);
    }

}