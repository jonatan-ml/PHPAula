<?php

class ConnectionDB extends PDO {

    private static $instance = null;

    public function ConnectionDB($dns, $usuario, $senha) {
        //Construtor da classe pai (parent) -> PDO
        parent::__construct($dns, $usuario, $senha);
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                // Cria uma conexão e retorna a instância dela
                self::$instance = new ConnectionDB("mysql:dbname=ecomm;host=localhost", "root", "");
                echo "Conectado ao banco de dados!";
            } catch (Exception $ex) {
                echo "Ocorreram erros ao tentar conectar no banco de dados!";
                echo "$e";
                exit();
            }
        }
        return self::$instance;
    }

}
?>
