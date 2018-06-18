<?php

class Conexion {

    private $connexion="";
    public function __construct() {

    }
    
    public function getConexion(){
        
        $db = require_once("baseDades.php");
        $connexion = new mysqli( $db["host"], $db["user"], $db["pass"], $db["database"] );

        if ($connexion->connect_error) {
			die("Connection failed: " . $connexion->connect_error);
        }
        return $connexion;
    }
}
?>