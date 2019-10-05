<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
error_reporting(-1);

use \classes\{BookProduct, NotebookProduct};
use \classes\interfaces\{IGadget, I3D};

function autoloader($class) {
  $class = str_replace("\\", "/", $class);
  $file = __DIR__ . "/{$class}.php";

  if (file_exists($file)) {
    require $file;
  }
}

spl_autoload_register('autoloader');

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product) {
  echo "<p>We offer case for gadget: {$product->getName()}</p>";
}

$book = new BookProduct('Awaken the giant within', 200, 256);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

offerCase($notebook);

debug($book);

echo $book->getProduct();
