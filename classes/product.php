<?php

class product {
    protected $name;
    protected $image;
    protected $price;
    protected $category;

    public function __construct(string $name, string $image, float $price, category $category)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price; 
        $this->category = $category;  
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }
    
    public function getCategory()
    {
        return $this->category;
    }
}