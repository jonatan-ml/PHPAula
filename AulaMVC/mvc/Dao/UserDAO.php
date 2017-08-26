<?php

include '../Persistence/ConnectionDB.php';

class UserDAO {

    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstance();
    }

    public function insertUser($user) {
        try {
            $status = $this->connection->prepare("Insert into users(id, user, nome, sobrenome, idade, password, email) values (null, ?, ?, ?, ?, ?,?)");
            $status->bindValue(1, $user->user);
            $status->bindValue(2, $user->nome);
            $status->bindValue(3, $user->sobrenome);
            $status->bindValue(4, $user->idade);
            $status->bindValue(5, $user->password);
            $status->bindValue(6, $user->email);

            $status->execute();

            //Encerra a conexão com o banco
            $this->connection = null;
        } catch (PDOException $e) {
            echo "Ocorreram erros ao inserir o usuario!";
        }
    }

}
?>