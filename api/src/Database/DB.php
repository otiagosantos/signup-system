<?php

namespace Signup\Database;

use PDO;
use PDOException;

class DB {
    private $dbHost;
    private $dbName;
    private $dbUser;
    private $userPassword;

    public function __construct() {
        $this->dbHost = DB_HOST;
        $this->dbName = DB_NAME;
        $this->dbUser = DB_USER;
        $this->userPassword = USER_PASSWORD;
    }

    public function getConnection() {
        try{
            $conn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->userPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch(PDOException $error) {
            echo "PDOException: " . $error;
        }
    }
}