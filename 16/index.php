<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
error_reporting(-1);

use wfm\interfaces\{IGadget, I3D};
use app\{BookProduct, NotebookProduct};
use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/vendor/autoload.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product) {
  echo "<p>We offer case for gadget: {$product->getName()}</p>";
}

$book = new BookProduct('Awaken the giant within', 200, 256);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

echo $book;
$book->ddfdfd = 'dfdfd';
