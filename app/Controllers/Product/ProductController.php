<?php

namespace App\Controllers\Product;

use App\Services\Product\ProductService;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class ProductController
{

    private ProductService $productService;

    public function __construct()
    {
        $this->productService = new ProductService();
    }

    public function index(): ResponseInterface
    {
        $products = $this->productService->getAllProducts();

        $response = new Response();
        $response->getBody()->write(json_encode($products));

        return $response;
    }

    public function store(Request $request, Response $response): ResponseInterface
    {
        $data = $request->getParsedBody();
        
        $product = $this->productService->createProduct($data);

        $response->getBody()->write(json_encode($product));

        return $response;
    }

}