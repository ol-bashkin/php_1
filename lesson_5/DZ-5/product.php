<?php

class Product
{
    public $name;
    public $price;
    
    public $catId;
    public $catName;
    
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
