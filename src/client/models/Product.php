<?php

namespace mirolabs\redcart\client\models;

use mirolabs\redcart\client\Model;

class Product extends Model
{
    protected $products_id;

    protected $products_name;

    protected $products_description_short;

    protected $products_description;

    protected $products_price;

    protected $products_price_brutto;

    protected $promotions_price;

    protected $promotions_price_brutto;

    protected $promotions_date_from;

    protected $promotions_date_to;

    protected $weight;

    protected $buy_price;

    protected $buy_price_brutto;

    protected $suggest_price;

    protected $producer_id;

    protected $deliverer_id;

    protected $products_model;

    protected $products_symbol;

    protected $ean;

    protected $deliverer_code;

    protected $status_id_18;

    protected $products_status;

    protected $meta_title;

    protected $meta_desc;

    protected $meta_keywords;

    protected $tax_value;

    protected $quantity;

    protected $fk_symbol;

    protected $warranty;

    protected $warranty_value;

    protected $products_time;

    protected $products_time_type;

    protected $producers_code;

    protected $date_edit;

    protected $tax_id;

    protected $promotions_type;

    protected $currency;

    protected $quantity_all;

    protected $inventory;

    /**
     * @return mixed
     */
    public function getProductsId()
    {
        return $this->products_id;
    }

    /**
     * @param mixed $products_id
     */
    public function setProductsId($products_id)
    {
        $this->products_id = $products_id;
    }

    /**
     * @return mixed
     */
    public function getProductsName()
    {
        return $this->products_name;
    }

    /**
     * @param mixed $products_name
     */
    public function setProductsName($products_name)
    {
        $this->products_name = $products_name;
    }

    /**
     * @return mixed
     */
    public function getProductsDescriptionShort()
    {
        return $this->products_description_short;
    }

    /**
     * @param mixed $products_description_short
     */
    public function setProductsDescriptionShort($products_description_short)
    {
        $this->products_description_short = $products_description_short;
    }

    /**
     * @return mixed
     */
    public function getProductsDescription()
    {
        return $this->products_description;
    }

    /**
     * @param mixed $products_description
     */
    public function setProductsDescription($products_description)
    {
        $this->products_description = $products_description;
    }

    /**
     * @return mixed
     */
    public function getProductsPrice()
    {
        return $this->products_price;
    }

    /**
     * @param mixed $products_price
     */
    public function setProductsPrice($products_price)
    {
        $this->products_price = $products_price;
    }

    /**
     * @return mixed
     */
    public function getProductsPriceBrutto()
    {
        return $this->products_price_brutto;
    }

    /**
     * @param mixed $products_price_brutto
     */
    public function setProductsPriceBrutto($products_price_brutto)
    {
        $this->products_price_brutto = $products_price_brutto;
    }

    /**
     * @return mixed
     */
    public function getPromotionsPrice()
    {
        return $this->promotions_price;
    }

    /**
     * @param mixed $promotions_price
     */
    public function setPromotionsPrice($promotions_price)
    {
        $this->promotions_price = $promotions_price;
    }

    /**
     * @return mixed
     */
    public function getPromotionsPriceBrutto()
    {
        return $this->promotions_price_brutto;
    }

    /**
     * @param mixed $promotions_price_brutto
     */
    public function setPromotionsPriceBrutto($promotions_price_brutto)
    {
        $this->promotions_price_brutto = $promotions_price_brutto;
    }

    /**
     * @return mixed
     */
    public function getPromotionsDateFrom()
    {
        return $this->promotions_date_from;
    }

    /**
     * @param mixed $promotions_date_from
     */
    public function setPromotionsDateFrom($promotions_date_from)
    {
        $this->promotions_date_from = $promotions_date_from;
    }

    /**
     * @return mixed
     */
    public function getPromotionsDateTo()
    {
        return $this->promotions_date_to;
    }

    /**
     * @param mixed $promotions_date_to
     */
    public function setPromotionsDateTo($promotions_date_to)
    {
        $this->promotions_date_to = $promotions_date_to;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buy_price;
    }

    /**
     * @param mixed $buy_price
     */
    public function setBuyPrice($buy_price)
    {
        $this->buy_price = $buy_price;
    }

    /**
     * @return mixed
     */
    public function getBuyPriceBrutto()
    {
        return $this->buy_price_brutto;
    }

    /**
     * @param mixed $buy_price_brutto
     */
    public function setBuyPriceBrutto($buy_price_brutto)
    {
        $this->buy_price_brutto = $buy_price_brutto;
    }

    /**
     * @return mixed
     */
    public function getSuggestPrice()
    {
        return $this->suggest_price;
    }

    /**
     * @param mixed $suggest_price
     */
    public function setSuggestPrice($suggest_price)
    {
        $this->suggest_price = $suggest_price;
    }

    /**
     * @return mixed
     */
    public function getProducerId()
    {
        return $this->producer_id;
    }

    /**
     * @param mixed $producer_id
     */
    public function setProducerId($producer_id)
    {
        $this->producer_id = $producer_id;
    }

    /**
     * @return mixed
     */
    public function getDelivererId()
    {
        return $this->deliverer_id;
    }

    /**
     * @param mixed $deliverer_id
     */
    public function setDelivererId($deliverer_id)
    {
        $this->deliverer_id = $deliverer_id;
    }

    /**
     * @return mixed
     */
    public function getProductsModel()
    {
        return $this->products_model;
    }

    /**
     * @param mixed $products_model
     */
    public function setProductsModel($products_model)
    {
        $this->products_model = $products_model;
    }

    /**
     * @return mixed
     */
    public function getProductsSymbol()
    {
        return $this->products_symbol;
    }

    /**
     * @param mixed $products_symbol
     */
    public function setProductsSymbol($products_symbol)
    {
        $this->products_symbol = $products_symbol;
    }

    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param mixed $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return mixed
     */
    public function getDelivererCode()
    {
        return $this->deliverer_code;
    }

    /**
     * @param mixed $deliverer_code
     */
    public function setDelivererCode($deliverer_code)
    {
        $this->deliverer_code = $deliverer_code;
    }

    /**
     * @return mixed
     */
    public function getStatusId18()
    {
        return $this->status_id_18;
    }

    /**
     * @param mixed $status_id_18
     */
    public function setStatusId18($status_id_18)
    {
        $this->status_id_18 = $status_id_18;
    }

    /**
     * @return mixed
     */
    public function getProductsStatus()
    {
        return $this->products_status;
    }

    /**
     * @param mixed $products_status
     */
    public function setProductsStatus($products_status)
    {
        $this->products_status = $products_status;
    }

    /**
     * @return mixed
     */
    public function getMetaTitle()
    {
        return $this->meta_title;
    }

    /**
     * @param mixed $meta_title
     */
    public function setMetaTitle($meta_title)
    {
        $this->meta_title = $meta_title;
    }

    /**
     * @return mixed
     */
    public function getMetaDesc()
    {
        return $this->meta_desc;
    }

    /**
     * @param mixed $meta_desc
     */
    public function setMetaDesc($meta_desc)
    {
        $this->meta_desc = $meta_desc;
    }

    /**
     * @return mixed
     */
    public function getMetaKeywords()
    {
        return $this->meta_keywords;
    }

    /**
     * @param mixed $meta_keywords
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->meta_keywords = $meta_keywords;
    }

    /**
     * @return mixed
     */
    public function getTaxValue()
    {
        return $this->tax_value;
    }

    /**
     * @param mixed $tax_value
     */
    public function setTaxValue($tax_value)
    {
        $this->tax_value = $tax_value;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getFkSymbol()
    {
        return $this->fk_symbol;
    }

    /**
     * @param mixed $fk_symbol
     */
    public function setFkSymbol($fk_symbol)
    {
        $this->fk_symbol = $fk_symbol;
    }

    /**
     * @return mixed
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * @param mixed $warranty
     */
    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;
    }

    /**
     * @return mixed
     */
    public function getWarrantyValue()
    {
        return $this->warranty_value;
    }

    /**
     * @param mixed $warranty_value
     */
    public function setWarrantyValue($warranty_value)
    {
        $this->warranty_value = $warranty_value;
    }

    /**
     * @return mixed
     */
    public function getProductsTime()
    {
        return $this->products_time;
    }

    /**
     * @param mixed $products_time
     */
    public function setProductsTime($products_time)
    {
        $this->products_time = $products_time;
    }

    /**
     * @return mixed
     */
    public function getProductsTimeType()
    {
        return $this->products_time_type;
    }

    /**
     * @param mixed $products_time_type
     */
    public function setProductsTimeType($products_time_type)
    {
        $this->products_time_type = $products_time_type;
    }

    /**
     * @return mixed
     */
    public function getProducersCode()
    {
        return $this->producers_code;
    }

    /**
     * @param mixed $producers_code
     */
    public function setProducersCode($producers_code)
    {
        $this->producers_code = $producers_code;
    }

    /**
     * @return mixed
     */
    public function getDateEdit()
    {
        return $this->date_edit;
    }

    /**
     * @param mixed $date_edit
     */
    public function setDateEdit($date_edit)
    {
        $this->date_edit = $date_edit;
    }

    /**
     * @return mixed
     */
    public function getTaxId()
    {
        return $this->tax_id;
    }

    /**
     * @param mixed $tax_id
     */
    public function setTaxId($tax_id)
    {
        $this->tax_id = $tax_id;
    }

    /**
     * @return mixed
     */
    public function getPromotionsType()
    {
        return $this->promotions_type;
    }

    /**
     * @param mixed $promotions_type
     */
    public function setPromotionsType($promotions_type)
    {
        $this->promotions_type = $promotions_type;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getQuantityAll()
    {
        return $this->quantity_all;
    }

    /**
     * @param mixed $quantity_all
     */
    public function setQuantityAll($quantity_all)
    {
        $this->quantity_all = $quantity_all;
    }

    /**
     * @return mixed
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * @param mixed $inventory
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
    }

    /**
     * @return \mirolabs\collection\ArrayList
     * @throws \Exception
     */
    public function getCategoryBind()
    {
        return $this->repository->getModule('ProductsToCategories')->select(['products_id' => $this->getProductsId()], 100, 0);
    }

    /**
     * @return \mirolabs\collection\ArrayList
     * @throws \Exception
     */
    public function getOptionsBind()
    {
        return $this->repository->getModule('ProductsToOptions')->select(['products_id' => $this->getProductsId()], 100, 0);
    }

    /**
     * @return Producer
     * @throws \Exception
     */
    public function getProducer()
    {
        return $this->repository->getModule('Producers')->find($this->getProducerId());
    }

    /**
     * @return \mirolabs\collection\ArrayList
     * @throws \Exception
     */
    public function getGallery()
    {
        return $this->repository->getModule('Gallery')->select(['products_id' => $this->getProductsId()], 100, 0);
    }

    /**
     * @return \mirolabs\collection\ArrayList
     * @throws \Exception
     */
    public function getInventoryOptions()
    {
        return $this->repository->getModule('InventoryOptions')->select(['products_id' => $this->getProductsId()], 100, 0);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $data = parent::toArray();
        if (isset($data['quantity_all'])) {
            unset($data['quantity_all']);
        }
        if (isset($data['inventory'])) {
            unset($data['inventory']);
        }
        return $data;
    }


}