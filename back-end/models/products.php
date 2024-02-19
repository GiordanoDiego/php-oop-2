<?php

class Product{
    public $name;
    public $price;
    public $img;
    public $description;
    public $forCat;
    public $forDog;
    public $inStock;

    public function __construct(
        string $name, 
        float $price, 
        bool $forCat = false, 
        bool $forDog=false, 
        bool $inStock = false)
    {
        $this->name = $name;
        $this->price = $price;
        $this->forCat = $forCat;
        $this->forDog = $forDog;
        $this->inStock = $inStock;
    }
}




?>