<?php  
	
	include 'conexao.php';

	$nome = $_POST['txtNomeSac'];
	$email = $_POST['txtEmailSac'];
	$comentario = $_POST['txtComentarioSac'];

	try{
		$enviar = $cn -> query("INSERT INTO Sac VALUES(default, '$nome', '$email', '$comentario');");
		header('location:sucesso.php');
	} catch(PDOException $erro){
		echo $erro -> getMessage();
	}
?>