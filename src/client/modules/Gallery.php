<?php

namespace mirolabs\redcart\client\modules;


use mirolabs\redcart\client\Module;

class Gallery extends Module
{
    protected $module = "gallery";
    protected $modelType = "mirolabs\\redcart\\client\\models\\Gallery";
    protected $indexName = "id";
    protected $responseIndex = "gallery";
}