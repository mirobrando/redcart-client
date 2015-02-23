<?php

namespace mirolabs\redcart\client\models;

use mirolabs\redcart\client\Model;

class ProductsToOptions extends Model
{
    protected $poid;

    protected $povid;

    protected $products_id;

    protected $direct;

    protected $kind;

    protected $value;

    protected $default_value;

    /**
     * @return mixed
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * @param mixed $poid
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;
    }

    /**
     * @return mixed
     */
    public function getPovid()
    {
        return $this->povid;
    }

    /**
     * @param mixed $povid
     */
    public function setPovid($povid)
    {
        $this->povid = $povid;
    }

    /**
     * @return mixed
     */
    public function getProductsId()
    {
        return $this->products_id;
    }

    /**
     * @param mixed $products_id
     */
    public function setProductsId($products_id)
    {
        $this->products_id = $products_id;
    }

    /**
     * @return mixed
     */
    public function getDirect()
    {
        return $this->direct;
    }

    /**
     * @param mixed $direct
     */
    public function setDirect($direct)
    {
        $this->direct = $direct;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param mixed $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * @param mixed $default_value
     */
    public function setDefaultValue($default_value)
    {
        $this->default_value = $default_value;
    }


}