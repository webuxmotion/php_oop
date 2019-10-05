<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
error_reporting(-1);


require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/IGadget.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product) {
  echo "<p>We offer case for gadget: {$product->getName()}</p>";
}

$book = new BookProduct('Awaken the giant within', 200, 256);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

offerCase($notebook);
//offerCase($book);

debug($book);

echo $book->getProduct();

class A{};
class B extends A{};
class C{};

$a = new A;
$b = new B;
$c = new C;

var_dump($b instanceof A);
