<?php
require_once __DIR__."/products.php";



class Toy extends Product{
    public $material;
    public $width;
    public $heigth;

    public function __construct(
        $name,
        $price,
        $forCat,
        $forDog,
        $inStock,
        $material,
        $width,
        $heigth
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
        $this->width = $width;
        $this->heigth = $heigth; 
    }
}


?>