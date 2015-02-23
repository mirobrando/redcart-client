<?php

namespace mirolabs\redcart\client\models;


use mirolabs\redcart\client\Model;

class ProductOptionsValues extends Model
{
    protected $id;

    protected $po_id;

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
    public function getPoId()
    {
        return $this->po_id;
    }

    /**
     * @param mixed $po_id
     */
    public function setPoId($po_id)
    {
        $this->po_id = $po_id;
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


}