<?php
session_start();
$tipo = $_GET["tipo"];


if ($tipo == "login") {

	$username = $_POST["username"];
	$password = $_POST["password"];

	if($username == ""){
		echo "<div class='alert alert-danger'>Usuário em Branco!</div>";
	}
	elseif($password == ""){
		echo "<div class='alert alert-danger'>Senha em Branco!</div>";
	}
	else {	

		include 'src/Api.php';
		include 'funcoes.php';
		include 'inc/config.php';

		$api = new Api($dados_api["host"], $dados_api["app_token"]);
		$api->init($username, $password);
		$return = $api->initSession();
		if ($return["erro"] == "0") {
			$token = $return["session_token"];
			$_SESSION["session_token"] = $token;

			echo "<script>$(document).ready(function() {
					var novaURL = 'index.php';
					$(window.document.location).attr('href',novaURL);
				});</script>";
		}
		else{
		    echo "<div class='alert alert-danger'>Login Inváldo!</div>";
	    }
	}
}


if ($tipo == "config") {

	$url = $_POST["url"];
	$tipo = $_POST["tipo"];
	$token = $_POST["token"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	if($url == ""){
		echo "<div class='alert alert-danger'>Url em Branco!</div>";
	}
	elseif($token == ""){
		echo "<div class='alert alert-danger'>Token em Branco!</div>";
	}
	elseif($username == ""){
		echo "<div class='alert alert-danger'>Usuário em Branco!</div>";
	}
	elseif($password == ""){
		echo "<div class='alert alert-danger'>Senha em Branco!</div>";
	}
	else {	


		if ($tipo == "RC1") {
			$urlFinal = "$url/apirest.php";
		}
		if ($tipo == "RC2") {
			$urlFinal = "$url/api";
		}

		echo "<div class='alert alert-warning' id='testalert'>Realizando Teste!</div>";
		include 'src/Api.php';
		$api = new Api($urlFinal, $token);
		$api->init($username, $password);
		$return = $api->test();

		if ($return["status"] == 1) {
			echo "<script>$(document).ready(function() {
			       setTimeout(function(){ $('#testalert').fadeOut()}, 1500);
							});</script>";

			echo "<div class='alert alert-success'>Configurado com sucesso! \n Redirecionando ...</div>";

			// Cria o arquivo config.php
			$conteudo = "<?php

			define(\"LANG\",'en_US');

			\$dados_api = array(
					\"host\" => \"#HOST#\",
					\"app_token\" => \"#TOKEN#\" 

				);

			?>
			";

			$arquivo = "inc/config.php";
			$fd = @fopen($arquivo, "a") or die("<div class='alert alert-danger'>Erro ao tentar configurar</div>");

			$conteudo = str_replace ( '#HOST#' , $urlFinal , $conteudo );
			$conteudo = str_replace ( '#TOKEN#' , $token , $conteudo );

			@fclose ($fd);
			$fd = @fopen ($arquivo, "w");
			@fputs($fd, $conteudo);
			@fclose($fd);

			// unlink("_instalar/index.php");
			// rmdir("_instalar/");

			echo "<script>$(document).ready(function() {
					var novaURL = '../index.php';
					$(window.document.location).attr('href',novaURL);
				});</script>";
		}
		else {
			echo "<script>$(document).ready(function() {
			            setTimeout(function(){ $('#testalert').fadeOut()}, 1500);
							});</script>";
			$return =  $return["msg"][0];
		    echo "<div class='alert alert-danger'>Erro ao tentar configurar # $return</div>";
		}

	}

}