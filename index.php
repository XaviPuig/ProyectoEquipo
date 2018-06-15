<?php
require_once("controller/control.php");
$control = new Control();

if( isset($_GET["action"]) ){
    
    
    switch( $_GET["action"] ){
    /*Comprobamos si el formulario LogIn recibe parametres por la URL*/
        
        case 1:
            echo $control->main();
            break;
        case 2:
            echo $control->llistatEquips();
            break;
    }
} else{
    echo $control->logIn();
}

?>
