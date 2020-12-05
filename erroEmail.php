<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Erro - E-mail já cadastrado.</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		body{
			background-image: url(img/fundo30.jpg);
		}

		#container{
			background-color: rgba(220,220,220, 0.8);
			width: 75%;
			margin-top: 12%;
		}
	</style>
</head>
<body>
	<?php 
		include 'navbar.php'; 
	?>
	<div class="container-fluid" align="center" id="container">
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<h2>Usuário com e-mail já cadastrado.</h2>
			<a href="login.php" class="btn btn-default" role="button" style="color: #A313C5; font-size: 120%;">Tentar Novamente
			</a>			
		</div>
	</div>
	<?php
		include 'footer.php';  
	?>
</body>
</html>