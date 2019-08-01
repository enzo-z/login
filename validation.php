<?php
    session_start();
    $userbd = array("Enzo", "Klaus", "Pedro");
    $passbd = array("frango", "mina", "doce");
    
    $login = $_POST["login"];
    $pass = $_POST["password"];
    $aux = FALSE;
    for ($i = 0; $i<count($userbd); $i++){
        if ($login == $userbd[$i] && $pass == $passbd[$i]){
            $aux = TRUE;
            break;
        }
    }
    if ($aux){
        $_SESSION["logado"] = TRUE;
        $_SESSION["usr"] = $login;
        
        header("Location: home.php");
    }
    else{
        header("Location: index.php");
    }