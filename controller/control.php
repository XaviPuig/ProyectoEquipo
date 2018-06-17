<?php

require_once("./model/usuario.php");
require_once("./model/usuarioDAO.php");

class Control{
    public function logIn(){
        require_once("./views/LogIn.php");
    }
    
    public function main($cadena=""){
        
        //Mostra Pag Inicial i variar el contingut dinamic amb main($cadena)
        $pagina = $this->cargarPlantilla("views/pagInicial.php");
        $replacePage = str_replace("%CONTENT%", $cadena, $pagina);
        return $replacePage;
    }
        
    private function cargarPlantilla($pagWeb){

        $pagina = file_get_contents($pagWeb);
        return $pagina;
    }
    
    public function llistatEquips(){
        
        $cadena = $this->cargarPlantilla("./views/pagInicial.php");
        return $this->main($cadena);
    }
        
}
?>