<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro efetuado</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
		}

		#container{
			background-color: rgba(220,220,220, 0.8);
			width: 50%;
			margin-top: 15%; 
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
		include 'navbar.php';  
	?>
	<center>
		<div id="container">
			<h2>Registro efetuado com sucesso!</h2>
			<a href="index.php" style="font-size: 120%; color:#5e17eb;"> Voltar para a home page.</a>
		</div>
	</center>
	<?php include'footer.php'; ?>
</body>
</html>