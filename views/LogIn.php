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

    //Instanciar un nou objecteUsuari per validar el LogIn
    $userObj = new Usuario($usuari, $password);
 

 /*   
    //validar Usuario || retorna true o false
    
    $validarUsuari = $userObj->validarUsuario($usuari);
    if( $validarUsuari == "true" ){
        echo "Usuario OK";
    }

    validar password con el usuario elegido
    if( $validarUsuari == "true" ){ 
         
    var_dump($validarPassword);
    var_dump($result);
    
    //la funció validarUsuari() per comprovar el camp USUARI(DNI) 
    //no era compatible amb la funcio validarPassword()
*/

    $validarPassword = $userObj->validarPassword($usuari, $password);
        if(  ($validarPassword=="jugador") || ($validarPassword=="directiu") || ($validarPassword=="entrenador") ){
            
            //Iniciar SESSIO d'Usuari
            
            $errorForm = "* Usuari correcte";
            $msgCategory = "Es de la categoria ".$validarPassword ;
        } else{
            //Retornar un missatge d'error si l'usuari o contrasenya son incorrectes
            $errorForm = "* Usuari i/o contrasenya incorrectes";
            $msgCategory = $validarPassword ;
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