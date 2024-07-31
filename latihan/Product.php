<?php

class Product{
    public $name = "default name";
    public $price = 0;
    protected $discount = 0;

    public function __construct($pdctname,$harga){
        $this->name = $pdctname;
        $this->price = $harga;

    }
    public function getDiscount(){
        return $this->discount;
    }

    public function getPrice(){
        $price = $this->price - ($this->price * $this->getDiscount());
        return $price;
    }
    public function setDiscount($setDiscount){
        $this->discount = $setDiscount;
    }
}

$getClass = new Product("Laptop Asus <br/>", 500000);
// $getClass->getDiscount();
echo $getClass->name;
echo $getClass->getPrice();