<?php
require_once('../model/database.php');
require_once('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

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
    case 'show_add_form':
        include('../view/add_product.php');
        break;
        case 'add_product':
            $productCode = filter_input(INPUT_POST, 'productCode');
            $name = filter_input(INPUT_POST, 'name');
            $version = filter_input(INPUT_POST, 'version');
            $releaseDateInput = filter_input(INPUT_POST, 'releaseDate');
        
            try {
                $date = new DateTime($releaseDateInput);
                $releaseDateFormatted = $date->format('Y-m-d');
            } catch (Exception $e) {
                $error_message = "Invalid date. Please use a valid date format.";
                include('../errors/error.php');
                exit();
            }
        
            ProductDB::addProduct($productCode, $name, $version, $releaseDateFormatted);
            header('Location: .');
            break;
}
?>