<?php  

	include'conexao.php';

	$nome = $_POST['txtNomeContato'];
	$email = $_POST['txtEmailContato'];
	$telefone = $_POST['txtTelefoneContato'];
	$assunto = $_POST['txtAssuntoContato'];
	$mensagem = $_POST['txtMensagemContato'];

	try{
		$enviarMensagem = $cn->query("INSERT INTO Contato (cod_contato, nome_contato, email_contato, telefone_contato, assunto_contato, mensagem_contato) VALUES(default, '$nome', '$email', '$telefone', '$assunto', '$mensagem')");

	} catch(PDOException $erro){
		echo $erro -> getMessage();
	}

?>