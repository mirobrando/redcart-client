<?php

namespace mirolabs\redcart\client\models;


use mirolabs\redcart\client\Model;

class Producer extends Model
{
    protected $id;

    protected $pr_name;

    protected $pr_href;

    protected $pr_logo;

    protected $description;

    protected $title;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrName()
    {
        return $this->pr_name;
    }

    /**
     * @param mixed $pr_name
     */
    public function setPrName($pr_name)
    {
        $this->pr_name = $pr_name;
    }

    /**
     * @return mixed
     */
    public function getPrHref()
    {
        return $this->pr_href;
    }

    /**
     * @param mixed $pr_href
     */
    public function setPrHref($pr_href)
    {
        $this->pr_href = $pr_href;
    }

    /**
     * @return mixed
     */
    public function getPrLogo()
    {
        return $this->pr_logo;
    }

    /**
     * @param mixed $pr_logo
     */
    public function setPrLogo($pr_logo)
    {
        $this->pr_logo = $pr_logo;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


}