<?php

namespace mirolabs\redcart\client\modules;


use mirolabs\redcart\client\Module;

class ProductsOptions extends Module
{
    protected $module = "productsOptions";
    protected $modelType = "mirolabs\\redcart\\client\\models\\ProductOptions";
    protected $indexName = "id";
    protected $responseIndex = "products_options";

}