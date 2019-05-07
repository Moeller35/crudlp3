<?php

class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exercicios_lp3";

    private $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
    }

    public function close() {
        $this->conn->close();
    }

    public function execute($sql) {
        $this->connect();
        if ($result = $this->conn->query($sql)) {
            $this->close();
            return $result;
        } else {
            echo "Erro ao executar o SQL: "+$sql;
            echo "Erro: " + $this->conn->error;
            die();
            $this->close();
        }
    }
}
?>