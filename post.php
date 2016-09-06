<?php
session_start();
$tipo = $_GET["tipo"];

if ($tipo == "login") {

	$username = $_POST["username"];
	$password = $_POST["password"];

	if($username != "" and $password != ""){

		include 'src/Api.php';
		include 'config.php';

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
	}
}