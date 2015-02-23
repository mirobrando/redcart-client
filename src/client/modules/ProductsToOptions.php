<?php

namespace mirolabs\redcart\client\modules;

use mirolabs\redcart\client\Module;

class ProductsToOptions extends Module
{
    protected $module = "productsToOptions";
    protected $modelType = "mirolabs\\redcart\\client\\models\\ProductsToOptions";
    protected $indexName = "products_id";
    protected $responseIndex = "products_to_options";


}