<?php
require_once __DIR__ . "/product.php";

class food extends product {

    private $expiration;
    private $ashes;
    private $meat;

    public function __construct(string $name, string $image, float $price, category $category, string $expiration, int $ashes, string $meat)
    {
        parent::__construct($name, $image, $price, $category);
        $this->expiration = $expiration;
        $this->ashes = $ashes;
        $this->meat = $meat;
    }

    public function setExpiration($date)
    {
        $this->expiration = $date;
    }

    public function getExpiration()
    {
       return $this-> expiration;
    }

    public function getAshes()
    {
       return $this-> ashes;
    }

    public function getMeat()
    {
       return $this-> meat;
    }

}