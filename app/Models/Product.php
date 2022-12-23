<?php

namespace App\Models;

class Product {
    
    private string $id;
    private string $name;
    private float $price;
    private string $description;

    public function __construct()
    {
        $this->id = uniqid("product_");
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getPrice() 
    {
        return $this->price;
    }

    public function setPrice(float $price) 
    {
        $this->price = $price;
    }

    public function getDescription() 
    {
        return $this->description;
    }

    public function setDescription(string $description) 
    {
        $this->description = $description;
    }
}