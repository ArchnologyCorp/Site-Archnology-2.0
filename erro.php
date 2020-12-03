<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Erro</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		body{
			background-color: #CDCBCE;
		}
	</style>
</head>
<body>
	<?php  
		include'conexao.php';
		include'nav.php';
	?>
	<div class="container-fluid" align="center">
		<div class="col-sm-4 col-sm-offset-4 text-center" style="margin-top: 10%;">
			<h2>Usuário ou senha incorretos!!</h2>
				<a href="login.php" class="btn btn-default" role="button" style="color: #A313C5; font-size: 120%;">Tentar Novamente</a>
				<a href="cadusuario.php">
					<button type="button" class="btn btn-lg btn-link" style="color: #A313C5;">
						Ainda não possui um cadastro? Clique aqui!
					</button>
				</a>			
		</div>
	</div>
</body>
</html>