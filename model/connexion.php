<?php

class Conexion {

    private $conn;
    public function __construct() {

    }
    
    public function getConexion(){
        
        $db = require_once("baseDades.php");
        $conn = new mysqli( $db["host"], $db["user"], $db["pass"], $db["database"]);

        if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>