<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contato - Archnology</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="jquery.mask.js"></script>
	<script>
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    var forms = document.getElementsByClassName('needs-validation');
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#telefoneValidation').mask('(00) 00000-0000');
		});
	</script>
	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
		}

		#home:hover{
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
			<div class="card text-center" style="width: 35%; border-radius: 3% 3%">
				<div class="card-body">
					<h2> Contato </h2>
					<p style="font-size: 120%">Insira a razão para o contato e tentaremos responder o quanto antes!</p>
					<form name="formContato" method="post" action="insContato.php" enctype="multipart/form-data" class="needs-validation" novalidate>
						<img src="img/contato.svg" width="23%" height="35%">
						<div class="form-group">
							<input type="text" name="txtNomeContato" class="form-control" id="nomeValidation" placeholder="Nome" required>
							<div class="invalid-feedback">Insira um nome para sabermos quem enviou a mensagem.</div>
						</div>
						<div class="form-group">
							<input type="email" name="txtEmailContato" class="form-control" id="emailValidation" placeholder="E-mail" required>
							<div class="invalid-feedback">Insira um e-mail para, quando possível, mandarmos a resposta.</div>
						</div>
						<div class="form-group">
							<input type="text" name="txtTelefoneContato" class="form-control" id="telefoneValidation" placeholder="Celular: (00) 00000-0000" required>
							<div class="invalid-feedback">Por favor, insira o seu celular como meio alternativo de contato.</div>
						</div>
						<div class="form-group">
							<input type="text" name="txtAssuntoContato" class="form-control" id="assuntoValidation"placeholder="Assunto da mensagem" required>
							<div class="invalid-feedback"> Insira um assunto antes de enviar a mensagem </div>
						</div>
						<div class="form-group">
							<textarea rows="5" name="txtMensagemContato" class="form-control" id="mensagemValidation" placeholder="Digite aqui sua mensagem" style="resize: none;" required></textarea>
							<div class="invalid-feedback"> Por favor, insira a mensagem do contato.</div>
						</div>
						<button type="submit" class="btn btn-lg btn-default" style="background-color: #5e17eb; color: white;">Enviar</button>
					</form>
				</div>
			</div>
	</center>
	<?php include 'footer.php';?>
</body>
</html>