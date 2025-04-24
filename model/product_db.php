<?php
class ProductDB {

    public static function getProduct(string $productCode): array {
        $db = Database::getDB();
        $query = 'SELECT * FROM products WHERE productCode = :productCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $productCode, PDO::PARAM_STR);
        $statement->execute();
        $product = $statement->fetch(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $product;
    }

    public static function getProducts() {
        $db = Database::getDB();
        $query = 'SELECT * FROM products';
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $products;
    }
    public static function deleteProduct(string $productCode): void {
        $db = Database::getDB();
        $query = 'DELETE FROM products WHERE productCode = :productCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $productCode, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function updateProduct(string $productCode, string $name, string $version, string $releaseDate): void {
        $db = Database::getDB();
        $query = 'UPDATE products
                  SET name = :name,
                      version = :version,
                      releaseDate = :releaseDate
                  WHERE productCode = :productCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name, PDO::PARAM_STR);
        $statement->bindValue(':version', $version, PDO::PARAM_STR);
        $statement->bindValue(':releaseDate', $releaseDate, PDO::PARAM_STR);
        $statement->bindValue(':productCode', $productCode, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function addProduct(string $productCode, string $name, string $version, string $releaseDate): void {
        $db = Database::getDB();
        $query = 'INSERT INTO products (productCode, name, version, releaseDate) VALUES (:productCode, :name, :version, :releaseDate)';
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $productCode, PDO::PARAM_STR);
        $statement->bindValue(':name', $name, PDO::PARAM_STR);
        $statement->bindValue(':version', $version, PDO::PARAM_STR);
        $statement->bindValue(':releaseDate', $releaseDate, PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>