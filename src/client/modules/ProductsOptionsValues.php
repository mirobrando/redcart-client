<?php

namespace mirolabs\redcart\client\modules;


use mirolabs\redcart\client\Module;

class ProductsOptionsValues extends Module
{
    protected $module = "productsOptionsValues";
    protected $modelType = "mirolabs\\redcart\\client\\models\\ProductOptionsValues";
    protected $indexName = "id";
    protected $responseIndex = "products_options_values";
}