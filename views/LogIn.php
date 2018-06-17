<?php
$userObj = null;
$errorForm="";
$msgCategory="";

function tractarEntrada($dada){
        $dada = trim($dada);
        $dada = stripslashes($dada);
        $dada = htmlspecialchars($dada);
        return $dada;
}

if(!empty($_POST["usuari"]) && !empty($_POST["password"])){
    
    $usuari = tractarEntrada($_POST["usuari"]);
    $password = tractarEntrada($_POST["password"]);

    //Instanciar un nou objecteUsuari per validar
    $userObj = new Usuario($usuari, $password);
    
    //validar Usuario || retorna true o false
    $validarUsuari = $userObj->validarUsuario($usuari);
    
    //validar password con el usuario elegido
    $validarPassword = $userObj->validarPassword($usuari, $password);
    
    if( ($validarUsuari=="jugador") && ($validarUsuari=="entrenador") ){ 
        var_dump($validarPassword);
        var_dump($result);
        /*if(  $validarPassword != "-1" ){
            
            //Si el Usuari es CERT i Password CERT
            //Iniciar SESSIO d'Usuari
            $errorForm = var_dump($result);
            
            //$errorForm = "* Usuari correcte";
            $msgCategory = "Es de la categoria jugador" ;
        } else{
            
            //Si el Usuari es CERT i Password es FALS
            $errorForm = "* Consenya incorrecte";
        }*/
    } else{
        
        //Si el Usuari es FALS
        $errorForm = "* Usuarios inexistent";
    } 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProjecteEquip</title>
    <link rel="stylesheet" href="./assets/css/stylesHOME.css">
</head>
<body>
    <main id="main" class="BackgroundPage">
        <article>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="text" class="formLogin" placeholder="Usuari (dni)" name="usuari" autofocus />
                <input type="password" class="formLogin" placeholder="Contrasenya" name="password" />
                <input type="submit" id="btLogin" name="submit" class="formLogin" value="Entrar">
                <p class="pError"><?php echo $errorForm ?></p>
                <p class="pError"><?php echo $msgCategory ?></p>
            </form>
        </article>
    </main>
</body>
</html>