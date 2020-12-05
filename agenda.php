<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agenda de Contatos</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
			background-size: 100%;
		}

		#home:hover{
			padding-right: 40px;
			color: #5e17eb;
			transition: color 1s; 
		}

		.container{
			background-color: rgba(220,220,220, 0.9);
			width: 85%;
			border-radius: 5% 5%;
			margin-top: 4%;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		include 'conexao.php';
		include 'navbar.php';

		$consultaContato = $cn -> query('SELECT * FROM Contato'); 
	?>

	<br/>
	<center>
		<div class="container">
		  	<h1> Agenda </h1>
			<p style="font-size: 120%"> Lista de todos os contatos mais recentes.</p>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Número</th>
			      <th scope="col">Nome</th>
			      <th scope="col">E-mail</th>
			      <th scope="col">Telefone</th>
			      <th scope="col">Assunto</th>
			      <th scope="col">Mensagem</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			    	while ($exibeAgenda = $consultaContato -> fetch(PDO::FETCH_ASSOC)) {?>
			    	<tr>	
				      <th scope="row"><?php echo $exibeAgenda['cod_contato'];?></th>
				      <td><?php echo $exibeAgenda['nome_contato'];?></td>
				      <td><?php echo $exibeAgenda['email_contato'];?></td>
				      <td style="width: 15%;"><?php echo $exibeAgenda['telefone_contato']; ?></td>
				      <td style="width: 15%;"><?php echo $exibeAgenda['assunto_contato']; ?></td>
				      <td><?php echo $exibeAgenda['mensagem_contato']; ?></td>
			    	</tr>
			    <?php } ?>
			  </tbody>
			</table>
		</div>
	</center>
	<?php include 'footer.php';?>
</body>
</html>