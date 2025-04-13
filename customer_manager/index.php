<?php

require_once('../model/database.php');
require_once('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action'); // Default to POST
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action'); // Check GET if not POST
    if ($action === NULL) {
        $action = 'show_search_form'; // Default action
    }
}

switch ($action) {
    case 'show_search_form':
        include('../view/customer_search.php'); // Display the search form
        break;

    case 'search_customers':
        $last_name = filter_input(INPUT_GET, 'last_name'); // Or INPUT_POST, depending on your form
        $customers = CustomerDB::getCustomersByLastName($last_name);
        include('../view/customer_search.php');
        break;

    case 'view_update_customer':
        $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
        $customer = CustomerDB::getCustomer($customer_id);
        $countries = CustomerDB::getCountries();
        include('../view/customer_update.php');
        break;

    case 'update_customer':
        $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $address = filter_input(INPUT_POST, 'address');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $postal_code = filter_input(INPUT_POST, 'postal_code');
        $country_code = filter_input(INPUT_POST, 'country_code');
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        CustomerDB::updateCustomer($customer_id, $first_name, $last_name, $address, $city, $state, $postal_code, $country_code, $phone, $email, $password);

        header('Location: ?action=search_customers&last_name=' . urlencode($last_name)); // Redirect after update
        break;

    default:
        include('../view/customer_search.php'); 
        break;
}

?>