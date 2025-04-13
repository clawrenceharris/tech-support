<?php
   class Database {
    private static $db;

    public static function getDB() {
        $dsn = 'mysql:host=localhost;dbname=tech_support';
        $username = 'root';
        $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
        return $db;
    }
}
?>