<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área Restrita</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
			background-size: 100%;
		}

		#container{
			background-color: rgba(220,220,220, 0.8);
			width: 90%;
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
		include 'navbar.php';  
	?>
	<br/>
	<center>
		<div id="container">
			<h1> Área Restrita</h1>
			<p style="font-size: 120%"> Acesse os relatórios dos últimos comentários ou dos contatos. </p>
			<div class="col" style="margin-left: 15%;">
				<div class="row">
					<a href=""><img src="img/agenda.png" width="250"></a>
					<a href=""><img src="img/comentários.png" width="250"></a>
				</div>
				<div class="row">
					<h3> Agenda de Contatos</h3>
				</div>
			</div>
		</div>
	</center>
</body>
</html>