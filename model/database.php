<?php
   class Database {
    private static $db;

    public static function getDB() {
        if (!isset(self::$db)) {
            $dsn = 'mysql:host=localhost;dbname=tech_support';
            $username = 'root';
            $password = '';

            try {
                self::$db = new PDO($dsn, $username, $password);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo "<p>Database error: $error_message</p>";
                exit();
            }
        }
        return self::$db;
    }
}
?>