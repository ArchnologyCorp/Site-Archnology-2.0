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
			background-image: url('img/fundo30.jpg');
		}

		#container{
			background-color: #DCDCDC;
			width: 75%;
			border-radius: 5% 5%;
		}

		#home:hover{
			padding-right: 40px;
			color: #5e17eb;
			transition: color 1s; 
		}
	</style>
</head>
<body>
	<?php
		session_start();
		include 'conexao.php'; 
		include 'navbar.php';  
	?>
	<center>
		<br/>
			<div class="card text-center" style="width: 40%; border-radius: 3% 3%">
				<div class="card-body">
					<h2> Contato </h2>
					<p style="font-size: 120%">Insira a razão para o contato e tentaremos entrar em contato o quanto antes!</p>
					<form name="formContato" method="post" action="insContato.php" enctype="multipart/form-data">
						<img src="img/contato.svg" width="23%" height="35%">
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