<?php

namespace mirolabs\redcart\client\modules;


use mirolabs\redcart\client\Module;

class InventoryOptions extends Module
{
    protected $module = "inventoryOptions";
    protected $modelType = "mirolabs\\redcart\\client\\models\\InventoryOptions";
    protected $indexName = "products_id";
    protected $responseIndex = "inventory_options";
    protected $bindModel = true;

    public function delete(array $indexes)
    {
        if (count($indexes) > 0) {
            $response = $this->sendMethod('delete', $indexes);
            if ($response['count'] != 1) {
                throw new \Exception('Invalid Request');
            }
        }
    }


}