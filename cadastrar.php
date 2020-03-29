<?php
session_start();
include('conexao.php');

$nome_usuario = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$confirm_senha = mysqli_real_escape_string($conexao, $_POST['confirmacao_senha']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);

$sql = "SELECT COUNT(*) AS 'total' FROM usuario WHERE nome = '$nome_usuario'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT COUNT(*) AS 'total email' FROM usuario WHERE email = '$email'" ;
$result2 = mysqli_query($conexao,$sql2);
$row2 = mysqli_fetch_assoc($result2);
 
//verifica se o usuário já existe no banco
if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: tela_cadastro.php');
    exit();
}
if($row2['total email'] == 1) {
    $_SESSION['email_existe'] = true;
    header('Location: tela_cadastro.php');
    exit();
}
if ($senha == $confirm_senha) {
    $sql = "INSERT INTO usuario (nome, senha, email) values ('$nome_usuario','$senha','$email')";
}

if($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
} 
$conexao -> close();
header('Location: tela_cadastro.php');
exit();

?>