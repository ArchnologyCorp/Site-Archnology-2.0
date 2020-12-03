<?php  
	include'conexao.php';

	session_start(); 
	$Vemail = $_POST['txtEmail'];
	$Vsenha = $_POST['txtSenha'];

	$consulta = $cn -> query("select cod_usuario,nome_usuario, email_usuario, senha_usuario, status_usuario from Usuario where email_usuario = '$Vemail' and senha_usuario = '$Vsenha'");

	if ($consulta -> rowCount() == 1) {
		$exibeUsuario = $consulta -> fetch(PDO::FETCH_ASSOC);
		$_SESSION['ID'] = $exibeUsuario['cod_usuario'];
		header('location:index.php');
	} 
	else{
		header('location:erro.php');
	}

?>