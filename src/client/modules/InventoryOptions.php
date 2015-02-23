<?php

namespace mirolabs\redcart\client\modules;


use mirolabs\redcart\client\Module;

class InventoryOptions extends Module
{
    protected $module = "inventoryOptions";
    protected $modelType = "mirolabs\\redcart\\client\\models\\InventoryOptions";
    protected $indexName = "products_id";
    protected $responseIndex = "inventory_options";
}