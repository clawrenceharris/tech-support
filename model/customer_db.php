<?php

class Customer {
    public static function get_customers(){
        $db = Database::getDB();
        $query = 'SELECT * FROM customers';
        $result = $db->query($query);
        var_dump($result);
        return $result;
    }
    public static function getCustomersByLastName($last_name) {
        $db = Database::getDB();
        $query = "SELECT customerID, firstName, lastName, email, city FROM customers WHERE lastName = :last_name";
        $statement = $db->prepare($query);
        $statement->bindValue(':last_name', $last_name);
        $statement->execute();
        $customers = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $customers;
    }

    public static function getCustomer($customer_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM customers WHERE customerID = :customer_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->execute();
        $customer = $statement->fetch(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $customer;
    }

    public static function updateCustomer($customer_id, $first_name, $last_name, $email, $city) {
        $db = Database::getDB();
        $query = "UPDATE customers SET firstName = :first_name, lastName = :last_name, email = :email, city = :city WHERE customerID = :customer_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->execute();
        $statement->closeCursor();
    }
}

Customer::get_customers()
?>

