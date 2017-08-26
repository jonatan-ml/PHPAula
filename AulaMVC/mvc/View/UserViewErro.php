<?php
session_start();
?>

<html>
    <head>
        <title> Cadastro de usuário com Erro</title>
    </head>
    <body>
        <h1> Erros! </h1>


        <?php
//        if (isset($_GET['erros'])) {
        if (isset($_SESSION['erros'])) {
            $erros = array();
//            $erros = unserialize($_GET['erros']);
            $erros = unserialize($_SESSION['erros']);

            foreach ($erros as $e) {
                echo '<br/>' . $e;
            }
            unset($_SESSION['erros']);
        }
        ?>
    </body>
</html>