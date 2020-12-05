<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
			background-size: 100%;
		}

		#txtLogin{
			font-size: 150%;
			font-weight: 800; 
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
		include "navbar.php"; 
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
	<?php include 'footer.php';?>
</body>
</html>