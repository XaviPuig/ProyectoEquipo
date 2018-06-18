<?php

require_once("connexion.php");

class Usuario{

    //public $usuari;
    //public $password;
    
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


//// PAGINA "LogIn.php" ////
/*
    public function validarUsuario($usuari){
        $connexion = Conexion::getConexion();
        $sql = "SELECT dni FROM usuario WHERE dni='$usuari'";
        $result = $connexion->query($sql);
            
        if( $result->num_rows>0 ){
			$result->close();
            $connexion->close();
            return true;
        } else{
            $result->close();
            $connexion->close();
            return false;
        }
    }
*/
    
    public function validarPassword($usuari, $password){
        $connexion = Conexion::getConexion();

        $sql = "SELECT dni, nomCategoria 
                FROM usuarios.usuario 
                LEFT JOIN usuarios.categoria 
                ON usuarios.usuario.Refcategoria_id = usuarios.categoria.categoria_id 
                WHERE dni='$usuari' AND password='$password'";
        $result = $connexion->query($sql);

        if( $result->num_rows>0 ){
            $row = $result->fetch_assoc();
            return $row["nomCategoria"];
        } else{
            return -1;
        }
    }
    
//// PAGINA "pagINICIAL.php" ////
   /* public function llistatEquips(){
        
        $connexion = Conexion::getConexion();
        $sql = "SELECT ___ FROM ___";
        $result = $connexion->query($sql);
        
        $rows = $result->num_rows;
        $equips = array();
    }*/
    
} // FI CLASS USUARIO
?>