<?php 

namespace App\Services\Product;

use App\Models\Product;

class ProductService {

    private Product $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function getAllProducts(): string 
    {
        $products = [
            [
                "name" => "Product 1",
                "price" => 10.00,
                "description" => "Product 1 description"
            ],
            [
                "name" => "Product 2",
                "price" => 20.00,
                "description" => "Product 2 description"
            ],
            [
                "name" => "Product 3",
                "price" => 30.00,
                "description" => "Product 3 description"
            ],
        ];

        return json_encode($products);

    }

    public function createProduct(array $data): Product 
    {
        $this->productModel->setName($data['name']);
        $this->productModel->setPrice($data['price']);
        $this->productModel->setDescription($data['description']);

        return $this->productModel;

    }

    private function formartPrice(float $price): string 
    {
        return number_format($price, 2, ',', '.');
    }
}