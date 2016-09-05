<?php
$tipo = $_GET["tipo"];

if ($tipo == "login") {

	$username = $_POST["username"];
	$password = $_POST["password"];

	if($username != "" and $password != ""){

		include 'src/Api.php';
		include 'config.php';

		$api = new Api($dados_api["host"], $dados_api["app_token"], $username, $password);
		$return = $api->initSession();
		if ($return["erro"] == "0") {
			
		}
	}
}