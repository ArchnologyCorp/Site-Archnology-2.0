<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

	<style type="text/css">
		body{
			background-color: #CDCBCE;
		}

		#txtLogin{
			font-size: 150%;
			font-weight: 800; 
		}

	</style>
</head>
<body>
	<?php
		include "nav.php"; 
	 ?>
	<center>
	 	<div class="card text-center" style="width: 25rem; margin-top: 4%;">
			<div class="card-body">
			  <img src="img/user-login.jpg" class="img-responsive" alt="usuario" width="35%" >
			  <p id="txtLogin">Login</p>
			  <form name="formLogin" method="post" action="validalogin.php">
			  	<div class="form-group">
			  		<input type="email" name="txtEmail" class="form-control" required id="email" placeholder="E-mail">
			  	</div>
			  	<br/>
			  	<div class="form-group">
			  		<input type="password" name="txtSenha" class="form-control" required id="senha" placeholder="Senha">
			  	</div>
			  	<a href="index.php"style="margin-right: 30%; color: #5e17eb;">
							Esqueci minha senha </a>
					<button type="submit" class="btn btn-md" style="background-color: #5e17eb; color: white">
							Entrar
					</button>
					<br/><br/>
			  	<a href="formUsuario.php" style="color: #5e17eb;"> Você não possui conta? Cadastre-se já!</a>
			  </form>
		  </div>
		</div>
	</center>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko"/>
</body>
</html>