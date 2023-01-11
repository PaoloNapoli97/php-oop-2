<?php
require_once __DIR__ . "/product.php";

class game extends product {

    private $material;

    public function setMaterial($material)
    {
       $this->material = $material;
    }

    public function getMaterial()
    {
       return $this-> material;
    }

}