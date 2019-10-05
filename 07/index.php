<?php

error_reporting(-1);

require_once 'classes/Product.php';

$product = new Product('Macbook', 300, 'Intel Core i5');
$book = new Product('Awaken the gian within', 200, null, 200);

echo $product->getProduct();
echo $book->getProduct('book');
