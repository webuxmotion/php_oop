<?php

error_reporting(-1);

require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

$notebook = new NotebookProduct('Macbook', 300, 'Intel Core i5');
$book = new BookProduct('Awaken the gian within', 200, 256);

echo $notebook->getProduct();
echo $book->getProduct();
