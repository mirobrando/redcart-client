<?php

namespace mirolabs\redcart\client;


use mirolabs\collection\ArrayList;

class Repository
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var $bool
     */
    private $https;

    /**
     * @var array
     */
    private $modules = [];

    /**
     * @param $key
     * @param $https
     */
    public function __construct($key, $https)
    {
        $this->key = $key;
        $this->https = $https;
    }


    /**
     * @param string $name
     * @return Module
     * @throws \Exception
     */
    public function getModule($name)
    {
        if (!array_key_exists($name, $this->modules)) {

            $className = 'mirolabs\\redcart\\client\\modules\\' . $name;
            if (!class_exists($className)) {
                throw new \Exception('Invalid module: ' . $name);
            }
            $this->modules[$name] = new $className($this, $this->key, $this->https);
        }

        return $this->modules[$name];
    }

    /**
     * @param array $types
     * @param $resultType
     * @return ArrayList
     */
    public function getObjects(array $types, $resultType)
    {
        return Model::getObjects($types, $resultType, $this);
    }

    /**
     * @param $type
     * @param $resultType
     * @return mixed
     */
    public function getObject($type, $resultType)
    {
        return Model::getObject($type, $resultType, $this);
    }
}