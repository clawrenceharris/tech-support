<?php
require_once('../model/database.php');
require_once('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}switch ($action) {
    case 'list_products':
        $products = ProductDB::getProducts();
        include('../view/product_list.php');
        break;
    case 'delete_product':
        $productCode = filter_input(INPUT_POST, 'productCode');
        ProductDB::deleteProduct($productCode);
        header('Location: .');
        break;
    case 'show_add_form':
        include('../view/add_product.php');
        break;
    case 'add_product':
        $productCode = filter_input(INPUT_POST, 'productCode');
        $name = filter_input(INPUT_POST, 'name');
        $version = filter_input(INPUT_POST, 'version');
        $releaseDate = filter_input(INPUT_POST, 'releaseDate');

        ProductDB::addProduct($productCode, $name, $version, $releaseDate);
        header('Location: .');
        break;
}
?>