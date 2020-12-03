<?php  
	
	include 'conexao.php';

	$nome = $_POST['txtNomeSac'];
	$email = $_POST['txtEmailSac'];
	$comentario = $_POST['txtComentarioSac'];

	echo $nome;
	echo $email;
	echo $comentario;

	try{
		$enviar = $cn -> query("INSERT INTO Sac VALUES(default, '$nome', '$email', '$comentario');");
	} catch(PDOException $erro){
		echo $erro -> getMessage();
	}
?>