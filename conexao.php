<?php

	$servidor = "Localhost";
	$usuario = "root";
	$senha = "0431723748";
	$banco = "dbSitePhp";

	$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>