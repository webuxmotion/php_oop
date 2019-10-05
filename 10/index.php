<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
error_reporting(-1);


require_once 'classes/Product.php';
require_once 'classes/I3D.php';
//require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new BookProduct('Awaken the giant within', 200, 256);

echo $book->getProduct();
echo $book->test();

