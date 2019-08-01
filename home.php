<?php  
    session_start();
    if($_SESSION["logado"] != TRUE || !isset($_SESSION["logado"])){
        header("Location: index.php");
    }
    else{
        echo("<h1>SEJA BEM-VINDO!</h1>");
    }