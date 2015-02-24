<?php

namespace mirolabs\redcart\client;


use mirolabs\collection\ArrayList;
use mirolabs\redcart\client\Repository;

abstract class Model
{

    /**
     * @var Repository
     */
    protected $repository;


    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];
        foreach($this as $name => $value) {
            if ($name == 'repository' || is_null($value)) {
                continue;
            }
            $result[$name] = $value;
        }

        return $result;
    }

    /**
     * @param array $types
     * @param $resultType
     * @param Repository $repository
     * @return ArrayList
     */
    public static function getObjects(array $types, $resultType, Repository $repository)
    {
        $result = new ArrayList($resultType);
        foreach ($types as $type) {
            $result->add(self::getObject($type, $resultType, $repository));
        }

        return $result;
    }

    /**
     * @param $type
     * @param $resultType
     * @param Repository $repository
     * @return mixed
     */
    public static function getObject($type, $resultType, Repository $repository)
    {
        $result = new $resultType($repository);
        foreach ($type as $name => $value) {

            $result->$name = $value;
        }
        return $result;
    }
}