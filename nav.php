<nav class="navbar navbar-dark" style="background-color: #000;" >
		<div class="container-fluid">
			<div class="navbar-header">
				<img src="img/logo.png" class="d-inline-block align-top" style="width:40%; height:60%"></img>
			</div>
			<div class="navbar-brand navbar-right">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<img class="nav-link" src="img/brasil.png" class="d-inline-block align-top" style="float: right; padding-bottom:3%; padding-right: 9%; width: 20%;"></img>
						<img class="nav-link" src="img/eua.png" class="d-inline-block align-top" style="float: right; padding-bottom:3%; padding-right: 9%; width: 20%;"></img>
					</li>
					<?php if (empty($_SESSION['ID'])){	
					?>
					<li style="padding-top: 2%;"><a href="login.php" style="color: white;">
						<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill=	"currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
					</li></a>
					<?php } else{
						$consulta_usuario = $cn -> query("select nome_usuario from Usuario where cod_usuario = '$_SESSION[ID]'");
						$exibe_usuario = $consulta_usuario -> fetch(PDO::FETCH_ASSOC);
					?>
						<li style="padding-top: 1%;"><a href="#" style="color: white;">Bem-vindo(a), <?php echo $exibe_usuario['nome_usuario'];?></a></li>
						<li> <a href="sair.php" style="color: white; padding-left: 35%; ">
							<svg width="2em" height="2em" viewBox="0 0 16 12" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
							<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
							</svg>
						</li></a>
					<?php } ?>
				</ul>
		</div>
			<ul class="navbar-dark nav" style="margin-left: 25%; font-size: 140%;">
				<li class="nav-item active">
					<a class="nav-link" href="index.php" style="color: white; padding-right: 80px; ">Home</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="sobre.php" style="color: white; padding-right: 80px;">Empresa</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="conexao.php" style="color: white; padding-right: 80px;">Portfólio</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="contato.php" style="color: white; padding-right: 80px;">Contato</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="suporte.php" style="color: white; padding-right: 80px;">Suporte</a>
				</li>
			</ul>
	</div>
</nav>