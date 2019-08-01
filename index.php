<?php
    session_start();
    $error = $_SESSION["error"];
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width = device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styleindex.css">
        <title>Login</title>
    </head>
    <body>
        <form action="validation.php" method="POST" id="mainform">
            <div>
                <label>Login: <input type="text" name="login"></label>
                <br>
                <label style="margin-top:5px;">Senha: <input type="password" name="password"></label>
                <br>
                <button type="submit">Enviar</button>
            </div>
        </form>
        <?php
            if (!$error){
                echo "<div>$error</div>";
            }
        ?>
    </body>






</html>
