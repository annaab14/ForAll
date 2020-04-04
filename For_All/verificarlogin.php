<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: painel.php');
	exit();
}
?>