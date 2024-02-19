<?php
require_once __DIR__."/products.php";



class Kennel extends Product{
    public $material;
    public $waterproof;

    public function __construct(
        $name,
        $price,
        $forCat,
        $forDog,
        $inStock,
        $material,
        $waterproof
    )
    {
        parent::__construct(
            $name,
            $price,
            $forCat,
            $forDog,
            $inStock,
        );
        $this->material = $material;
        $this->waterproof = $waterproof; 
    }
}

?>