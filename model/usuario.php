<?php

require_once("connexion.php");

class Usuario{

    public $usuari;
    public $password;
    
    public function __construct($usuari, $password){
        $usuari = $usuari;
        $password = $password;
    }
    
    //Atribueix un parametre que li arriba    
    public function setNombre($usuari){$this->usuari=$usuari;}
    public function setPassword($password){$this->password=$password;}
    
    //Retorna un valor
    public function getNombre(){return $this->usuari;}
    public function getPassword(){return $this->password;}
     
    public function validarUsuario($usuari){
        $conn = Conexion::getConexion();
        $sql = "SELECT dni FROM usuario WHERE dni='$usuari'";
        $result = $conn->query($sql);
    
        if( $result->num_rows>0 ){
			return true;
            $conn->close();
        } else{
            return false;
        } // Okey! Funciona!
    }
    
    public function validarPassword($usuari, $password){
        $conn = Conexion::getConexion();
        $sql = "SELECT usuario.dni, usuario.password, categoria.categoria_id FROM usuario LEFT JOIN categoria ON usuario.Refcategoria_id = categoria.categoria_id WHERE dni='".$usuari."' AND password='".$password."'";
        //$sql = "SELECT usuario.dni, usuario.password FROM usuario WHERE dni='".$usuari."' AND password='".$password."'";
        $result = $conn->query($sql);
        
        if( $result->num_rows>"0" ){ 
            $row = $res->fetch_assoc();
            //$row["nombre"];
            return $row["dni"];
            //return  $row["categoria_id"];
            //return var_dump($result);
        } else{
            return "-1";
            //return $sql;
        }
    }
}
?>