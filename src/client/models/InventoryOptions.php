<?php

namespace mirolabs\redcart\client\models;


use mirolabs\redcart\client\Model;

class InventoryOptions extends Model
{
    protected $products_id;

    protected $quantity;

    protected $inventories_id;

    protected $options_array;

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
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getInventoriesId()
    {
        return $this->inventories_id;
    }

    /**
     * @param mixed $inventories_id
     */
    public function setInventoriesId($inventories_id)
    {
        $this->inventories_id = $inventories_id;
    }

    /**
     * @return mixed
     */
    public function getOptionsArray()
    {
        return $this->options_array;
    }

    /**
     * @param mixed $options_array
     */
    public function setOptionsArray($options_array)
    {
        $this->options_array = $options_array;
    }
}