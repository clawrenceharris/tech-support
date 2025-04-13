<?php
require_once('../model/database.php');

class RegistrationDB {
    public static function addRegistration($customerID, $productCode) {
        $db = Database::getDB();
        $query = 'INSERT INTO registrations (customerID, productCode, registrationDate)
                  VALUES (:customerID, :productCode, NOW())';
        $statement = $db->prepare($query);
        $statement->bindValue(':customerID', $customerID);
        $statement->bindValue(':productCode', $productCode);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function isProductRegistered($customerID, $productCode) {
        $db = Database::getDB();
        $query = 'SELECT COUNT(*) FROM registrations
                  WHERE customerID = :customerID AND productCode = :productCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':customerID', $customerID);
        $statement->bindValue(':productCode', $productCode);
        $statement->execute();
        $count = $statement->fetchColumn();
        $statement->closeCursor();
        return $count > 0;
    }
}

?>