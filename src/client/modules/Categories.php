<?php

namespace mirolabs\redcart\client\modules;

use mirolabs\redcart\client\Module;

class Categories extends Module
{
    protected $module = "categories";
    protected $modelType = "mirolabs\\redcart\\client\\models\\Category";
    protected $indexName = "id";
    protected $responseIndex = "categories";
}