<?php

use Slim\Factory\AppFactory;
use App\Controllers\Product\ProductController;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// SET ROUTES
$app->get('/products', [ProductController::class, 'index'])->setName("products.index");
$app->post('/products', [ProductController::class, 'store'])->setName("products.store");

$app->run();

