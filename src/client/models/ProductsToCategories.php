<?php

namespace mirolabs\redcart\client\models;


use mirolabs\redcart\client\Model;

class ProductsToCategories extends Model
{
    protected $products_id;

    protected $categories_id;

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
    public function getCategoriesId()
    {
        return $this->categories_id;
    }

    /**
     * @param mixed $categories_id
     */
    public function setCategoriesId($categories_id)
    {
        $this->categories_id = $categories_id;
    }


}