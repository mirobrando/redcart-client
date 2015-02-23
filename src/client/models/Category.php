<?php

namespace mirolabs\redcart\client\models;

use mirolabs\redcart\client\Model;

class Category extends Model
{

    protected $id;

    protected $name;

    protected $ordering;

    protected $info;

    protected $treepath;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * @param mixed $ordering
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getTreepath()
    {
        return $this->treepath;
    }

    /**
     * @param mixed $treepath
     */
    public function setTreepath($treepath)
    {
        $this->treepath = $treepath;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $data = parent::toArray();
        if (isset($data['treepath'])) {
            unset($data['treepath']);
        }
        return $data;
    }

    public function getProductsBind()
    {
        return $this->repository->getModule('ProductsToCategories')->select(['categories_id' => $this->getId()], 100, 0);
    }
}