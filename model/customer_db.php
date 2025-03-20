<?php

<<<<<<< HEAD
class CustomerDB
{
    public static function getCustomersByLastName($last_name)
    {
=======
class Customer {
    public static function get_customers(){
        $db = Database::getDB();
        $query = 'SELECT * FROM customers';
        $result = $db->query($query);
        var_dump($result);
        return $result;
    }
    public static function getCustomersByLastName($last_name) {
>>>>>>> 124034e (first commit)
        $db = Database::getDB();
        $query = "SELECT customerID, firstName, lastName, email, city FROM customers WHERE lastName = :last_name";
        $statement = $db->prepare($query);
        $statement->bindValue(':last_name', $last_name);
        $statement->execute();
        $customers = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $customers;
    }

<<<<<<< HEAD
    public static function getCustomer($customer_id)
    {
=======
    public static function getCustomer($customer_id) {
>>>>>>> 124034e (first commit)
        $db = Database::getDB();
        $query = "SELECT * FROM customers WHERE customerID = :customer_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->execute();
        $customer = $statement->fetch(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $customer;
    }

<<<<<<< HEAD
    public static function updateCustomer($customer_id, $first_name, $last_name, $address, $city, $state, $postal_code, $country_code, $phone, $email, $password)
    {
        $db = Database::getDB();
        $query = "UPDATE customers
                  SET firstName = :first_name,
                      lastName = :last_name,
                      address = :address,
                      city = :city,
                      state = :state,
                      postalCode = :postal_code,
                      countryCode = :country_code,
                      phone = :phone,
                      email = :email,
                      password = :password
                  WHERE customerID = :customer_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':postal_code', $postal_code);
        $statement->bindValue(':country_code', $country_code);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
=======
    public static function updateCustomer($customer_id, $first_name, $last_name, $email, $city) {
        $db = Database::getDB();
        $query = "UPDATE customers SET firstName = :first_name, lastName = :last_name, email = :email, city = :city WHERE customerID = :customer_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':city', $city);
>>>>>>> 124034e (first commit)
        $statement->bindValue(':customer_id', $customer_id);
        $statement->execute();
        $statement->closeCursor();
    }
<<<<<<< HEAD

    public static function getCountries() {
        $db = Database::getDB();
        $query = 'SELECT * FROM countries';
        $statement = $db->prepare($query);
        $statement->execute();
        $countries = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $countries;
    }
}
?>
=======
}

Customer::get_customers()
?>

>>>>>>> 124034e (first commit)
