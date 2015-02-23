<?php

namespace mirolabs\redcart\client\modules;


use mirolabs\collection\ArrayList;
use mirolabs\redcart\client\Module;

class Products extends Module
{
    protected $module = "products";
    protected $modelType = "mirolabs\\redcart\\client\\models\\Product";
    protected $indexName = "products_id";
    protected $responseIndex = "products";


    private function getOptions($inventory =1, $inventoriesId = null)
    {
        $options = ['inventory' => $inventory];
        if (!is_null($inventoriesId)) {
            $options['inventories_id'] = $inventoriesId;
        }

        return $options;
    }


    /**
     * @param ArrayList $products
     * @param int $inventory
     * @param null $inventoriesId
     * @return ArrayList
     * @throws \Exception
     */
    public function createProducts(ArrayList $products, $inventory =1, $inventoriesId = null)
    {
        return parent::create($products, $this->getOptions($inventory, $inventoriesId));
    }

}