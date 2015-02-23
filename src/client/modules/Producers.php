<?php

namespace mirolabs\redcart\client\modules;


use mirolabs\redcart\client\Module;

class Producers extends Module
{
    protected $module = "producers";
    protected $modelType = "mirolabs\\redcart\\client\\models\\Producer";
    protected $indexName = "id";
    protected $responseIndex = "producers";
}