<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contato - Archnology</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="jquery.mask.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#telefone').mask('(00) 00000-0000');
		});
	</script>
	<style type="text/css">
		body{
			background-color: #CDCBCE;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		include 'conexao.php'; 
		include 'nav.php';  
	?>
	<center>
		<br/>
		<div class="card text-center" style="width: 30%;">
			<div class="card-body">
				<h2 style="padding: 1% 0; color: #5e17eb;"> Contato </h2>
				<form name="formContato" method="post" action="insContato.php" enctype="multipart/form-data">
					<img src="img/contato.svg" width="28%" height="45%">
					<div class="form-group">
						<input type="text" name="txtNomeContato" class="form-control" required id="nome" placeholder="Nome">
					</div>
					<div class="form-group">
						<input type="email" name="txtEmailContato" class="form-control" required id="email" placeholder="E-mail">
					</div>
					<div class="form-group">
						<input type="text" name="txtTelefoneContato" class="form-control" id="telefone" required="telefone" placeholder="Celular: (00) 00000-0000">
					</div>
					<div class="form-group">
						<input type="text" name="txtAssuntoContato" class="form-control" required="assunto" placeholder="Assunto da mensagem">
					</div>
					<div class="form-group">
						<textarea rows="5" class="form-control" name="txtMensagemContato" placeholder="Digite aqui sua mensagem" required id="mensagem" style="resize: none;"></textarea>
					</div>
					<button type="submit" class="btn btn-lg btn-default" style="background-color: #5e17eb; color: white;">Enviar</button>
				</form>
			</div>
		</div>
	</center>

</body>
</html>