<?php

namespace mirolabs\redcart\client\modules;

use mirolabs\redcart\client\Module;

class ProductsToCategories extends Module
{
    protected $module = "productsToCategories";
    protected $modelType = "mirolabs\\redcart\\client\\models\\ProductsToCategories";
    protected $indexName = "categories_id] ";
    protected $responseIndex = "products_to_categories";
}