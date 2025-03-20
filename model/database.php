<?php
   class Database {
    private static $db;

    public static function getDB() {
<<<<<<< Updated upstream
<<<<<<< HEAD
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
=======
        if (!isset(self::$db)) {
            $dsn = 'mysql:host=your_host;dbname=tech_support';
            $username = 'root';
            $password = '';

=======
        if (!isset(self::$db)) {
            $dsn = 'mysql:host=your_host;dbname=tech_support';
            $username = 'root';
            $password = '';

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
>>>>>>> 124034e (first commit)
=======
>>>>>>> Stashed changes
    }
}
?>