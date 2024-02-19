<?php
require_once __DIR__."/products.php";


class Food extends Product{
    public $expiration;
    public $productType;
    public $weight;

    public function __construct(
        $name,
        $price,
        $forCat,
        $forDog,
        $inStock,
        $expiration,
        $weight
    )
    {
        parent::__construct(
            $name,
            $price,
            $forCat,
            $forDog,
            $inStock,
        );
        $this->expiration = $expiration;
        $this->weight = $weight;
    }
}


?>