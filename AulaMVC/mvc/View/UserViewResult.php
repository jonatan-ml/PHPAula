<?php
session_start();
?>

<html>
    <head>
        <title>Cadastro de Usuário efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><p>
            <?php
//            if (isset($_GET['user']) && isset($_GET['mail'])) {
//                echo '<br>Usuário:' . $_GET['user'] . '<br>Email:' . $_GET['mail'];
//            }
            if (isset($_SESSION['user']) && isset($_SESSION['mail'])) {
                echo '<br>Usuario: ' . $_SESSION['user'] .
                '<br>E-mail: ' . $_SESSION['mail'];

                unset($_SESSION['user']);
                unset($_SESSION['mail']);
            }
            ?>
    </body>
</html>