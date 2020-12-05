<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Suporte</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/c81ed8c9e4.js" crossorigin="anonymous"></script>
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
	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
		}

		.card{
			background-color: #D2D2D2;
		}

		#container{
			background-color: rgba(220,220,220, 0.8);
			width: 70%;
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
		session_start();
		include 'conexao.php';
		include 'navbar.php';  
	?>
	<center>
		<br/>
		<div id="container">
			<br/>
			<h1>SAC - Suporte de Atendimento ao Cliente</h1>
			<p style="font-size: 120%"> Indique o seu nome e um e-mail para que possamos entrar em contato. </p>
			<div class="card text-center" style="width: 38%; border-color: #5e17eb" >
				<div class="card-body">
					<form name="formSac" action="insSac.php" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="txtNomeSac"> Nome </label>
							<input type="text" class="form-control" name="txtNomeSac" id="txtNomeValidation" placeholder="Digite o seu nome aqui" required>
							<div class="invalid-feedback"> Por favor,insira um nome.</div>
						</div>
						<div class="form-group">
							<label for="txtEmailSac"> E-mail </label>
							<input type="email" class="form-control" name="txtEmailSac" id="txtEmailValidation" placeholder="Digite o seu endereço de e-mail aqui" required>
							<div class="invalid-feedback"> Por favor,insira o e-mail corretamente.</div>
						</div>
						<div class="form-group">
							<label for="txtComentarioSac"> Comentário </label>
							<textarea rows="5" class="form-control" name="txtComentarioSac" style="resize: none;" placeholder="Digite aqui sua avaliação/crítica" id="txtComentarioValidation" required=""></textarea>
							<div class="invalid-feedback"> Por favor, insira o seu comentário.</div>
						</div>
						<button type="submit" class="btn btn-md btn-default" style="background-color: #5e17eb; color: white;">Enviar</button>
					</form>
				</div>
			</div>
			<hr/>
			<h1> Dúvidas Frequentes </h1>
			<p style="font-size: 120%"> Aqui se encontram as principais dúvidas acerca dos serviços da Archnology. </p>
			<div class="accordion md-accordion" id="accordionPerguntas" role="tablist" aria-multiselectable="true" style="width: 55%;">
			  	<div class="card">
				    <div class="card-header" role="tab" id="primeiraPergunta">
				      <a data-toggle="collapse" data-parent="#accordionPerguntas" href="#collapsePergunta1" aria-expanded="true"
				        aria-controls="collapsePergunta1">
				        <h5 class="mb-0" style="color:#5e17eb;">
				           1 - Quais são os serviços oferecidos pela empresa? <i class="fas fa-angle-down rotate-icon"></i>
				        </h5>
				      </a>
				    </div>
				    <div id="collapsePergunta1" class="collapse show" role="tabpanel" aria-labelledby="primeiraPergunta"
				      data-parent="#accordionPerguntas">
				      <div class="card-body">
				      	Os serviços oferecidos pela Archnology e suas respectivas descrições podem ser encontrados na aba <a href="index.php">home</a> do nosso site.
				      </div>
				    </div>
				 </div>
				 <div class="card">
				    <div class="card-header" role="tab" id="segundaPergunta">
				      <a class="collapsed" data-toggle="collapse" data-parent="#accordionPerguntas" href="#collapsePergunta2"
				        aria-expanded="false" aria-controls="collapsePergunta2">
				        <h5 class="mb-0"style="color:#5e17eb;">
				         2 - Como posso agendar um serviço da empresa?  <i class="fas fa-angle-down rotate-icon"></i>
				        </h5>
				      </a>
				    </div>
				    <div id="collapsePergunta2" class="collapse" role="tabpanel" aria-labelledby="segundaPergunta"
				      data-parent="#accordionPerguntas">
				      <div class="card-body">
				       	Poderá entrar em contato com a empresa ao ligar para o número (11) 3589-4642 ou pelo próprio site, ao acessar a aba de <a href="contato.php">contato</a>.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" role="tab" id="terceiraPergunta">
				      <a class="collapsed" data-toggle="collapse" data-parent="#accordionPerguntas" href="#collapsePergunta3"
				        aria-expanded="false" aria-controls="collapsePergunta3">
				        <h5 class="mb-0" style="color:#5e17eb;">
				         3 - De que forma posso efetuar o pagamento dos serviços? <i class="fas fa-angle-down rotate-icon"></i>
				        </h5>
				      </a>
				    </div>
				    <div id="collapsePergunta3" class="collapse" role="tabpanel" aria-labelledby="terceiraPergunta"
				      data-parent="#accordionPerguntas">
				      <div class="card-body">
				         Através de boleto bancário (incluso Mercado Pago e Nubank), transferência e no cartão de débito ou crédito em até 12x sem juros.
				      </div>
				    </div>
				  </div>
				  <div class="card">
					<div class="card-header" role="tab" id="quartaPergunta">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordionPerguntas" href="#collapsePergunta4" aria-expanded="false" aria-controls="collapsePergunta4">
							<h5 class="mb-0" style="color:#5e17eb;"> 4 - Por que o nome Archnology? <i class="fas fa-angle-down rotate-icon"></i> </h5>
						</a>
						<div id="collapsePergunta4" class="collapse" role="tabpanel" aria-labelledby="quartaPergunta" data-parent="#accordionPerguntas">
							<div class="card-body">
								O nome estabelece uma conexão entre arquitetura(Arch) e tecnologia(nology) de forma que dá significado ao nosso trabalho, que é justamente, a construção de Softwares e os demais serviços voltados à tecnologia.
							</div>
						</div>
					</div>
				</div>
			</div>
		</center>
	</div>
	<?php include'footer.php'; ?>
</body>
</html>