<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registros de Usuários</title>
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
			width: 65%;
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

		$consultaAdm = $cn -> query('SELECT * FROM Usuario WHERE status_usuario = 1'); 
		$consultaCliente = $cn -> query('SELECT * FROM Usuario WHERE status_usuario = 0'); 
	?>
	<center>
		<br/>
		<div id="container">
			<br/>
			<h1>Registro dos Usuários</h1>
			<p style="font-size: 110%;">Todos os usuários cadastrados no site, divididos por clientes comuns e administradores.</p>
			<h4>Todos os administradores cadastrados:</h4>
			<?php while ($exibirAdm = $consultaAdm -> fetch(PDO::FETCH_ASSOC)) {
			?>
			<hr style="border:2px solid #5e17eb;"/>
			<form style="padding: 0% 2% 0% 2% ;">
			  	<div class="form-row">
				    <div class="form-group col-md-5">
				      	<label for="nome" class="col-sm-2 col-form-label">Nome</label>
				      	<input type="text" style="text-align: center" class="form-control" id="Nome" readonly value="<?php echo $exibirAdm['nome_usuario'];?>">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="email" class="col-md-4 col-form-label">E-mail</label>
				      <input type="email" style="text-align: center"class="form-control" id="email" readonly value="<?php echo $exibirAdm['email_usuario'];?>">
				    </div>
					<div class="form-group col-md-3">
					    <label for="senha" class="col-md-6 col-form-label">Senha</label>
					   	<input type="text" style="text-align: center"class="form-control" id="senha" readonly value="<?php echo mb_strimwidth($exibirAdm['senha_usuario'], 0, 7, '****');?>">
					</div>
				</div>
			  <div class="form-row">
				<div class="form-group col-md-3">
				    <label>Data de nascimento</label>
				    <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo date("d/m/Y",strtotime($exibirAdm['data_nasc']));?>">
				</div>
				<div class="form-group col-md-2">
			      <label for="sexo">Sexo</label>
			      <input type="text" style="text-align: center"class="form-control" id="sexo" readonly value="<?php if($exibirAdm['sx_usuario'] == 'M'){
			      	echo 'Masculino';
			      }else{
			      	echo 'Feminino';
			      } ?>">
			    </div>
			    <div class="form-group col-md-4">
			      <label>CPF</label>
			     <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['cpf'];?>"> 
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Rua</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['rua_usuario'];?>">
			    </div>
			   	<div class="form-group col-md-2">
			      <label>Número</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['numero_usuario'];?>">
			    </div>
			    <div class="form-group col-md-4">
			      <label>Bairro</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['bairro_usuario']; ?>">
			    </div>
			  </div>
			  <div class="form-row">
			  	<div class="form-group col-md-4">
			      <label>Cidade</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['cidade_usuario']; ?>">
			    </div>
			   	<div class="form-group col-md-2">
			      <label>Estado</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['estado_usuario']; ?>">
			    </div>
			  	<div class="form-group col-md-3">
			      <label>CEP</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['cep'];?>">
			    </div>
			   	<div class="form-group col-md-3">
			      <label>Complemento</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirAdm['complemento']; ?>">
			    </div>
			  </div>
			</form>
		<?php }?>
		<h4>Todos os clientes cadastrados:</h4> 
		<?php while ($exibirCliente = $consultaCliente -> fetch(PDO::FETCH_ASSOC)) {
			?>
			<hr style="border:2px solid #204DEC;"/>
			<form style="padding: 0% 2% 0% 2% ;">
			  	<div class="form-row">
				    <div class="form-group col-md-5">
				      	<label for="nome" class="col-sm-2 col-form-label">Nome</label>
				      	<input type="text" style="text-align: center" class="form-control" id="Nome" readonly value="<?php echo $exibirCliente['nome_usuario'];?>">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="email" class="col-md-4 col-form-label">E-mail</label>
				      <input type="email" style="text-align: center"class="form-control" id="email" readonly value="<?php echo $exibirCliente['email_usuario'];?>">
				    </div>
					<div class="form-group col-md-3">
					    <label for="senha" class="col-md-6 col-form-label">Senha</label>
					   	<input type="text" style="text-align: center"class="form-control" id="senha" readonly value="<?php echo mb_strimwidth($exibirCliente['senha_usuario'], 0, 7, '****');?>">
					</div>
				</div>
			  <div class="form-row">
				<div class="form-group col-md-3">
				    <label>Data de nascimento</label>
				    <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo date('d/m/Y', strtotime($exibirCliente['data_nasc']));?>">
				</div>
				<div class="form-group col-md-2">
			      <label for="sexo">Sexo</label>
			      <input type="text" style="text-align: center"class="form-control" id="sexo" readonly value="<?php if($exibirCliente['sx_usuario'] == 'M'){
			      	echo 'Masculino';
			      }else{
			      	echo 'Feminino';
			      } ?>">
			    </div>
			    <div class="form-group col-md-4">
			      <label>CPF</label>
			     <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['cpf'];?>"> 
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label>Rua</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['rua_usuario'];?>">
			    </div>
			   	<div class="form-group col-md-2">
			      <label>Número</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['numero_usuario'];?>">
			    </div>
			    <div class="form-group col-md-4">
			      <label>Bairro</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['bairro_usuario']; ?>">
			    </div>
			  </div>
			  <div class="form-row">
			  	<div class="form-group col-md-4">
			      <label>Cidade</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['cidade_usuario']; ?>">
			    </div>
			   	<div class="form-group col-md-2">
			      <label>Estado</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['estado_usuario']; ?>">
			    </div>
			  	<div class="form-group col-md-3">
			      <label>CEP</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['cep'];?>">
			    </div>
			   	<div class="form-group col-md-3">
			      <label>Complemento</label>
			      <input type="text" style="text-align: center"class="form-control" readonly value="<?php echo $exibirCliente['complemento']; ?>">
			    </div>
			  </div>
			</form>
		<?php  }?>
		</div>
	<center>
	<?php include 'footer.php';?>
</body>
</html>