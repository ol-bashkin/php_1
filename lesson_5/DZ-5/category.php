<?php

class Category
{
    public $catId;
    public $catName;
    
    public function __construct($catId, $catName)
    {
        $this->catId = $catId;
        $this->catName = $catName;
    }
    
    public function getCatId()
    {
        return $this->catId;
    }
    
    public function getCatName()
    {
        return $this->catName;
    }
    
    public function addToCat(&$product)
    {
        echo '1';
        $product->catId = $this.catId;
        $product->catName = $this.catName;
    }
}
