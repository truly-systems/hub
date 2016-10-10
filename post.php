<?php
session_start();
$tipo = $_GET["tipo"];

require_once('lang.php');
require_once('i18n.php');

if ($tipo == "login") {

	

	$username = $_POST["username"];
	$password = $_POST["password"];
	$lang = $_POST["lang"];

	if($username == ""){
		echo "<div class='alert alert-danger'>" . __('Usuário em Branco!') ."</div>";
	}
	elseif($password == ""){
		echo "<div class='alert alert-danger'>" . __('Senha em Branco!') ."</div>";
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

			$_SESSION["lang"] = $lang;

			echo "<script>$(document).ready(function() {
					var novaURL = 'index.php';
					$(window.document.location).attr('href',novaURL);
				});</script>";
		}
		else{
		    echo "<div class='alert alert-danger'>" . __('Login Inváldo!') ."</div>";
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
		echo "<div class='alert alert-danger'>" . __('Url em Branco!') ."</div>";
	}
	elseif($token == ""){
		echo "<div class='alert alert-danger'>" . __('Token em Branco!') ."</div>";
	}
	elseif($username == ""){
		echo "<div class='alert alert-danger'>" . __('Usuário em Branco!') ."</div>";
	}
	elseif($password == ""){
		echo "<div class='alert alert-danger'>" . __('Senha em Branco!') ."</div>";
	}
	else {	


		if ($tipo == "RC1") {
			$urlFinal = "$url/apirest.php";
		}
		if ($tipo == "RC2") {
			$urlFinal = "$url/api";
		}

		echo "<div class='alert alert-warning' id='testalert'>" . __('Realizando Teste!') ."</div>";
		include 'src/Api.php';
		$api = new Api($urlFinal, $token);
		$api->init($username, $password);
		$return = $api->test();

		if ($return["status"] == 1) {
			echo "<script>$(document).ready(function() {
			       setTimeout(function(){ $('#testalert').fadeOut()}, 1500);
							});</script>";

			echo "<div class='alert alert-success'>" . __('Configurado com sucesso! \n Redirecionando ...') ."</div>";

			// Cria o arquivo config.php
			$conteudo = "<?php

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
		    echo "<div class='alert alert-danger'>" . __('Erro ao tentar configurar #') ."</div>";
		}

	}

}

if ($tipo == "loadRss") {
  
  $countRss = 0;
  $conteudo = "";

  $feed = file_get_contents("http://trulymanager.com/v1/feed/");
  $rss = new SimpleXmlElement($feed);
  $countRss = count($rss);

  if($countRss > 0){
		  foreach($rss->channel->item as $entrada) {
		     $titulo = $entrada->title;
		     $link = $entrada->link;

		     $conteudo .= "<a href=\"$link\" class=\"media\"><div class=\"media-body\"><span class=\"media-text\">$titulo</span></div></a>";

		  }
  }

  echo "<script>
	$('.countRssOne').html($countRss);
	$('#conteudoRss').html('$conteudo');
</script>";

}