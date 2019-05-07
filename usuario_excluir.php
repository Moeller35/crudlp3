<?php
    $dados = $_GET;

    $id = $dados["id"];

    $sql = "DELETE FROM pessoas WHERE ID = '$id'";

    include_once './classes/conexao.php';
    $conexao = new Conexao();
    $conexao->execute($sql);
    
    header('Location: ./usuario_listar.php'); 
?>