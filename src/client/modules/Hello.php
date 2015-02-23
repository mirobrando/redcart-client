<?php

namespace mirolabs\redcart\client\modules;


class Hello extends Module
{
    protected $module = "hello";

    /**
     * @param string $name
     * @return string
     */
    public function hello($name)
    {
        $response = $this->sendMethod('hello', ['name' => $name]);
        return $response['request']['parameters']['name'];
    }

}