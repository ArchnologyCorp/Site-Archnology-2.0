<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000">
  <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="d-inline-block align-top" style="width:55%; height:40%"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 140%; margin-left:9%; ">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" id="home" style="padding-right: 40px;" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="home" style="padding-right: 40px;" href="sobre.php">Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="home" style="padding-right: 40px;" href="portfolio.php">
          Portfólio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="home" style="padding-right: 40px;" href="contato.php">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="home" style="padding-right: 40px;" href="suporte.php">Suporte</a>
      </li>
    </ul>
     <div class="navbar-brand navbar-right" style="margin-left: 5%">
        <ul class="nav justify-content-center">
          <li class="nav-item" style=" padding-left: 2%;">
            <a href=""><img src="img/brasil.png" class="d-inline-block align-top" style="padding-bottom:2%; float:right ;width: 18%;"></img></a>
            <a href=""><img src="img/eua.png" class="d-inline-block align-top" style="float:right; margin-right: 12%; width: 18%;"></img></a>
          </li>
        </ul>
    </div>
    <ul class="navbar nav mr-auto">
       <?php if (empty($_SESSION['ID'])){  
          ?>
          <li class="nav-link" style="padding: 1% 0 0% 26%; "><a href="login.php" style="color: white;">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill= "currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>Login
          </li></a>
          <?php } else{
            if ($_SESSION['Status'] == 0) {
                $consulta_usuario = $cn -> query("select nome_usuario from Usuario where cod_usuario = '$_SESSION[ID]'");
                $exibe_usuario = $consulta_usuario -> fetch(PDO::FETCH_ASSOC);
          ?>
          <li class="nav-link">
            <a href="#" style="color: white; font-size: 85%;">Bem-vindo(a), <?php echo $exibe_usuario['nome_usuario'];?></a>
            <a href="sair.php" style="color: white;">
                <svg width="15%" height="2em" viewBox="0 0 16 12" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
            </a>
          </li>  
          <?php } else{ 
          ?> 
          <li class="nav-item" style="padding: 20% 0% 10% 40%;">
            <a href="sair.php" style="color: white;">
            <span>
              <svg width="2em" height="2em" viewBox="0 0 16 12" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
            </span>
            </a>
          </li>
           <a href="adm.php"><button class="btn btn-md" style="margin-right: 10%; background-color: #5e17eb; color:white;">Gerenciamento</button></a>
        <?php }} ?>
    </ul>
  </div>
</nav>