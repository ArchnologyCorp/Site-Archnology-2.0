<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comentários dos Usuários</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
			background-size: 100%;
		}

		.container{
			background-color: rgba(220,220,220, 0.9);
			width: 60%;
			border-radius: 5% 5%;
			margin-top: 2%;
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

		$consultaComentarios = $cn -> query("SELECT * FROM Sac"); 
	?>
	<center>
		<br/>
		<div class="container">
			<h1> Comentários </h1>
			<p style="font-size: 120%;"> Todas as reclamações/sugestões/avaliações do site.</p>
			<hr/>
			<div class="row">
				<?php while ($exibeComentarios = $consultaComentarios -> fetch(PDO::FETCH_ASSOC)) { ?>
				<div class="col-sm-4">
					<table class="table table-borderless">
					  <thead>
					    <tr>
					      <th scope="col"><?php echo $exibeComentarios['nome_sac']?></th>
					    </tr>
					  </thead>
					    <tbody>
					    <tr>
					      <td rowspan="5"><?php echo $exibeComentarios['comentario_sac']?></td>
					    </tr>
					  </tbody>
					</table>
					<hr/>
				</div>
				<?php  }?>
			</div>
		</div>
	</center>
	<?php include 'footer.php';?>
</body>
</html>