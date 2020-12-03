<!DOCTYPE html>
<html>
<head>
	<title>Sobre</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		body{
			background-color: #CDCBCE;
		}

		#txtHistoria{
			width: 75%;
			font-weight: 400;
		}

		#missao{
			padding-left: 13%;
		}

		#valores{
			padding-right: 13%;
		}

		.sobre{
			text-align: center;
			width: 20%;
			font-size: 95%;
		}

		.listValores{
			list-style-type: none;
		}

	</style>
</head>
<body>
	<?php
		session_start();
		include'conexao.php';
		include'nav.php';  
	?>
	<center>
		<br/>
		<h1>Sobre a Empresa</h1>
		<p id="txtHistoria">Foi criada no dia 06 de maio de 2020 por Cleber Rodrigues de Souza, com o intuito de suprir a necessidade de empresas e profissionais na área de tecnologia. Desde jovem, Cleber despertou uma preferência para tecnologia e viu seu futuro voltado nele. Ao passar do tempo, foi-se reunindo pessoas que começaram a demonstrar interesse pela mesma ideia.</p>
		<div class="container-fluid">
			<img src="img/icon-missao1.png" class="img-responsive" style="float: left;" alt="..." width="21%" id="missao">
			<img src="img/icon-visao1.png" class="img-responsive" alt="icone da visão" width="8%" id="visao">
			<img src="img/icon-valores1.png" class="img-responsive" style="float: right;" alt="..." width="21%" id="valores">
		</div>
	</center>
	<div class="container-fluid">
		<table>
			<td class="sobre">
				Nossa maior aspiração como profissionais, e principalmente como pessoas, é atingir ao máximo todos os tipos de públicos, para que possam ter ciência da capacidade que a tecnologia em conjunto com a nossa empresa pode atingir. Desta forma, buscando crescer no mercado, assim como no convívio com quaisquer círculos sociais, tentando atingir ao máximo a capacidade técnológica da empresa.
			</td>
			<td class="sobre" style="padding-left: 1%;">
				Nos vemos no futuro como uma das maiores empresas de tecnologia do Brasil. Desejamos alcançar esse objetivo com nossos serviços de qualidade, baseado nos conhecimentos adquiridos na área, durante os anos de mercado. A experiência no percurso nos deu a inspiração de levar a tecnologia para dentro das empresas, automatizando e otimizando seus sistemas, sendo vista como referência dentro do mundo da tecnologia e pelas suas extensas colaborações.
			</td>
			<td class="sobre">
				- Confiança e respeito a todos, independente do cargo ou relação.
				<br/>
				- Amar o que fazemos.
				<br/>
				- Oferecer um bom ambiente de trabalho.
				<br/>
				- Sempre manter a ética.
				<br/>
				- Aperfeiçoamento profissional.
				<br/>
			</td>
		</table>
	</div>
	<br/>
	<center>
		<h2> Mapa da Empresa </h2>
		<p style="font-size: 120%"> Para marcar uma visita a empresa ou consultoria dos serviços, <a href="contato.php" style="color:#5e17eb">clique aqui.</a></p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.322157794313!2d-46.730816785189305!3d-23.520912684703035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8c1d371ec31%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1607004415702!5m2!1spt-BR!2sbr" width="60%" height="600" frameborder="0" style="border:1px solid #5e17eb;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</center>
</body>
</html>