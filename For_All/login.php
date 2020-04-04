<?php
session_start();
include('conexao.php');
 
if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: tela_login.php');
	exit();
}
 
$nome_usuario = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
//pega os campos informados pelo usuário e checa se estão no banco de dados:
$query = "select nome from usuario where nome = '{$nome_usuario}' and senha = '{$senha}'";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
    $_SESSION['nome'] = $nome_usuario;
    //esse painel.php será a página inicial do For All, para qual o usuário que está cadastrado sera redirecionado!
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: tela_login.php');
	exit();
}
?>