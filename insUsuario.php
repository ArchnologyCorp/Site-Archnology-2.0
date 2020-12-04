<?php 
	include'conexao.php';
	$nome = $_POST['txtNomeUsu'];
	$telefone = $_POST['txtTelefoneUsu'];
	$email = $_POST['txtEmailUsu'];
	$cpf = $_POST['txtCpfUsu'];
	$senha = $_POST['txtSenhaUsu'];

	//convertendo a data para o padrão americano. 
	$dataOriginal = $_POST['txtDataUsu'];
	$data = date("Y-m-d",strtotime($dataOriginal));

	$sexo = $_POST['radioSex'];
	$usuario = $_POST['radioUsuario'];

	$rua = $_POST['txtRuaUsu'];
	$bairro = $_POST['txtBairroUsu'];
	$numero = $_POST['txtNumeroUsu'];
	$cidade = $_POST['txtCidadeUsu'];
	$cep = $_POST['txtCepUsu'];
	$estado = $_POST['sltEstado'];
	$complemento = $_POST['txtComplemento'];

	$consulta = $cn -> query("SELECT email_usuario FROM Usuario WHERE email_usuario = '$email'");
	if($consulta -> rowCount() == 1){
		header('location:erroEmail.php');
	}
	else{
		$inserir = $cn -> query("INSERT INTO Usuario VALUES(default, '$nome', '$email', '$senha', '$data', '$sexo', '$cpf', '$usuario', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$cep', '$complemento');");
		header('location:sucesso.php');
	}
 ?>