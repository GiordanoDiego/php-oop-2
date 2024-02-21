<?php
require_once __DIR__."/products.php";
require_once __DIR__.'/../traits/size_trait.php';



class Toy extends Product{
    use Size;
    public $material;


    public function __construct(
        $name,
        $price,
        $forCat,
        $forDog,
        $inStock,
        $material,
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
        
    }
}


?>