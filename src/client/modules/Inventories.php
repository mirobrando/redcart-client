<?php

namespace mirolabs\redcart\client\modules;


class Inventories extends Module
{

    protected $module = "inventories";

    /**
     * @return int
     */
    public function getCount()
    {
        $response = $this->sendMethod('count', []);
        return (int)$response['count'];
    }

    public function selectIds(array $ids)
    {
        $response = $this->sendMethod('selectIds', ['products_id' => $ids]);
        var_dump($response);
    }

    public function select($limit, $offset)
    {
        $response = $this->sendMethod('select', [], ['limit' => $limit, $offset=>$offset]);
        var_dump($response);
    }
}