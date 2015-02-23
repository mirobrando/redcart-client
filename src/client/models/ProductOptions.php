<?php

namespace mirolabs\redcart\client\models;

use mirolabs\redcart\client\Model;

class ProductOptions extends Model
{
    protected $id;

    protected $name;

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

    public function getValues()
    {
        return $this->repository->getModule('ProductsOptionsValues')->select(['po_id' => $this->getId()], 100, 0);
    }
}