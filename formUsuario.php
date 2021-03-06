<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Usuário</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
	<script src="jquery.mask.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#celularValidator').mask('(00) 00000-0000');
			$('#cepValidator').mask('00000-000');
			$('#cpfValidator').mask('000.000.000-00');
		});
	</script>

	<style type="text/css">
		body{
			background-image: url('img/fundo30.jpg');
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
		include 'conexao.php';
		include 'navbar.php';

		$consultaEstado = $cn -> query("select * from sigla_estado");
	?>
	<br/>
	<center>
		<div class="card text-center" style="width: 50%; border-radius: 3% 3%">
			<div class="card-body">
				<h2>Formulário de Usuário</h2>
				<img src="img/formUsu.png" width="20%"/>
				<br/><br/>
				<form name="formUsuario" method="post" action="insUsuario.php" class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control" name="txtNomeUsu" id="nomeValidator" placeholder="Nome" required>
						</div>
						<div class="col">
							<input type="text"class="form-control" name="txtTelefoneUsu" placeholder="Celular" id="celularValidator" required>
						</div>
					</div>
					<br/>
					<div class="form-row">
						<div class="col">
							<input type="email"
							class="form-control" name="txtEmailUsu" id="emailValidator" placeholder="E-mail" required>
						</div>
						<div class="col">
							<input type="text" class="form-control" name="txtCpfUsu" id="cpfValidator" placeholder="CPF" required>
						</div>
					</div>
					<br/>
					<div class="form-row">
						<div class="col">
							<input type="password" class="form-control" name="txtSenhaUsu" id="senhaValidator"placeholder="Senha" required>
						</div>
						<div class="col">
							<input type="date" class="form-control" name="txtDataUsu" id="dataValidator" placeholder="Data" required>
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<p style="font-size: 130%; padding: 2% 1% 0 1%;"> Usuário: </p>
							<div class="form-check form-check-inline">
						 		<input class="form-check-input" type="radio" name="radioUsuario" id="usuarioClienteValidator" value="0" required>
						  		<label class="form-check-label" for="inlineRadio1">Cliente</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="radioUsuario" id="usuarioAdmValidator" value="1" required>
							  <label class="form-check-label" for="inlineRadio2">Administrador</label>
							</div>
						</div>
						<div class="col">
							<p style="font-size: 130%; padding: 2% 1% 0 1%;"> Sexo: </p>
							<div class="form-check form-check-inline">
						 		<input class="form-check-input" type="radio" name="radioSex" id="sexoMasculinoValidator" value="M" required>
						  		<label class="form-check-label" for="inlineRadio1">Masculino</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="radioSex" id="sexoFemininoValidator" value="F" required>
							  <label class="form-check-label" for="inlineRadio2">Feminino</label>
							</div>
						</div>
					</div>
					<hr style="border: 1px solid #5e17eb; background-color: #5e17eb;" />
					<h2>Endereço</h2>
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control" name="txtRuaUsu" id="ruaValidator" placeholder="Rua"
							required>
						</div>
						<div class="col">
							<input type="text"class="form-control" name="txtBairroUsu" id="bairroValidator" placeholder="Bairro"
							required>
						</div>
					</div>
					<br/>
					<div class="form-row">
						<div class="col">
							<input type="number"
							class="form-control" name="txtNumeroUsu" id="numeroValidator" placeholder="Nº" required>
						</div>
						<div class="col">
							<input type="text" class="form-control" name="txtCidadeUsu" id="cidadeUsuValidator" placeholder="Cidade" required>
						</div>
						<div class="col">
							<select class="form-control" name="sltEstado" id="estadoValidator" required>
							  <option value=""> Selecione o estado </option>
							   <?php while ($listaEstado = $consultaEstado -> fetch(PDO::FETCH_ASSOC)) { ?> 
							  	<option value="<?php echo $listaEstado['desc_sigla']; ?>"><?php echo $listaEstado['desc_sigla']; ?></option>
							  <?php } ?>
							</select>
						</div>
					</div>
					<br/>
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control" name="txtCepUsu" id="cepValidator" placeholder="CEP" id="cep" required>
						</div>
						<div class="col">
							<input type="text" class="form-control" name="txtComplementoUsu" placeholder="Complemento">
						</div>	
					</div>
					<br/>
					<button type="submit" class="btn btn-lg" style="background-color: #5e17eb; color:white;">Entrar</button>
					<button type="reset" class="btn btn-lg" style="background-color: #5e17eb; color: white; margin-left: 3%;">Limpar</button>
				</form>
			</div>
		</div>
	</center>
	<?php include 'footer.php';?>
</body>
</html>