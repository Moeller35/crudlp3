<?php
    $dados = $_GET;

    $id = $dados["id"];

    $sql = "DELETE FROM grupos WHERE ID = '$id'";

    include_once './classes/conexao.php';
    $conexao = new Conexao();
    $conexao->execute($sql);
    
    header('Location: ./grupos_listar.php'); 
?>