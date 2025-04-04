<?php

require_once('../model/database.php');
require_once('../model/customer_db.php');

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = 'show_search_form'; 
    }
}

switch ($action) {
    case 'show_search_form':
        include('../view/customer_search.php');
        break;
    case 'search_customers':
        $last_name = filter_input(INPUT_GET, 'last_name');
        $customers = CustomerDB::getCustomersByLastName($last_name);
        include('../view/customer_search.php');
        break;
    case 'view_update_customer':
        $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
        $customer = CustomerDB::getCustomer($customer_id);
        include('../view/customer_update.php');
        break;
    case 'update_customer':
        $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $email = filter_input(INPUT_POST, 'email');
        $city = filter_input(INPUT_POST, 'city');
        CustomerDB::updateCustomer($customer_id, $first_name, $last_name, $email, $city);
        header('Location: .?action=show_search_form');
        break;
}
?>