
<?php

class DB {

    protected static $con;

    private function __construct() {
        try {
            self::$con = new PDO('mysql:host=localhost;charset=utf8mb4;dbname=login_system', USER, "");
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);
        }catch(PDOException $e) {
            die("Database connection failed: ". $e->getMessage());
        }
    }

    public static function getConnection() {
        /** if no connection, run it */
        if(!self::$con) new DB();

        return self::$con;
    }




}