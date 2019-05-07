<?php
$dados = $_POST;

$descricao = $dados['descricao'];

$sql = "INSERT INTO grupos (DESCRICAO) VALUES ('$descricao')";

include_once './classes/conexao.php';
$conexao = new Conexao();
$conexao->execute($sql);

echo "<script> alert('Formulário foi salvo com sucesso'); 
      window.location.href = 'grupos_listar.php'</script>";