<?php
session_start(); 

require_once('../model/database.php');
require_once('../model/customer_db.php');
require_once('../model/product_db.php');
require_once('../model/registration_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_login';
    }
}

switch ($action) {
    case 'show_login':
        if (isset($_SESSION['customerID'])) {
            header('Location: .?action=show_register_form');
            exit();
        }
        include('../view/customer_login.php');
        break;
    case 'login':
        $email = filter_input(INPUT_POST, 'email');
        $customer = CustomerDB::getCustomerByEmail($email);
        if ($customer) {
            $_SESSION['customerID'] = $customer['customerID'];
            $_SESSION['customerEmail'] = $customer['email']; 
            header('Location: .?action=show_register_form');
        } else {
            $error = 'Invalid email address.';
            include('../errors/error.php');
        }
        break;
    case 'show_register_form':
        if (!isset($_SESSION['customerID'])) {
            header('Location: .?action=show_login');
            exit();
        }
        $customer = CustomerDB::getCustomer($_SESSION['customerID']);
        $products = ProductDB::getProducts();
        include('../view/register_product.php');
        break;
    case 'register_product':
        $productCode = $_POST['productCode'];
        if (RegistrationDB::isProductRegistered($_SESSION['customerID'], $productCode)) {
            $error = 'Product is already registered for this customer.';
            include('../errors/error.php');        } else {
            RegistrationDB::addRegistration($_SESSION['customerID'], $productCode);
            $message = 'Product registered successfully.';
            include('../view/registration_success.php');
        }
        break;
    case 'logout':
        session_unset(); 
        session_destroy(); 
        header('Location: .?action=show_login');
        break;
    default:
        include('../view/customer_login.php');
        break;
}
?>