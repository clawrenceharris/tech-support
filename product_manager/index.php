<?php
<<<<<<< Updated upstream
<<<<<<< HEAD
// require('../model/product_db.php');
=======
require_once('../model/database.php');
require_once('../model/product_db.php');
>>>>>>> Stashed changes

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

<<<<<<< Updated upstream
if ($action == 'under_construction') {
    include('../under_construction.php');
=======
require_once('../model/database.php');
require_once('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

=======
>>>>>>> Stashed changes
switch ($action) {
    case 'list_products':
        $products = ProductDB::getProducts();
        include('../view/product_list.php');
        break;
    case 'delete_product':
        $productCode = filter_input(INPUT_POST, 'productCode');
        ProductDB::deleteProduct($productCode);
        header('Location: .');
        break;
<<<<<<< Updated upstream
>>>>>>> 124034e (first commit)
=======
>>>>>>> Stashed changes
}
?>