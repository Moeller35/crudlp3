<?php
$dados = $_POST;

$nome = $dados['nome'];
$cpf = $dados['cpf'];
$telefone = $dados['telefone'];
$email = $dados['email'];

$sql = "INSERT INTO pessoas (NOME, CPF, TELEFONE, EMAIL) VALUES ('$nome', '$cpf', '$telefone', '$email')";

include_once './classes/conexao.php';
$conexao = new Conexao();
$conexao->execute($sql);

echo "<script> alert('Formulário foi salvo com sucesso'); 
      window.location.href = 'usuario_listar.php'</script>";