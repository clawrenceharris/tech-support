<?php
class ProductDB {
    public static function getProducts() {
        $db = Database::getDB();
        $query = 'SELECT * FROM products';
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $products;
    }

    public static function deleteProduct($productCode) {
        $db = Database::getDB();
        $query = 'DELETE FROM products WHERE productCode = :productCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $productCode);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>