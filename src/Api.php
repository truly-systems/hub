<?php
/**
* 
*/
class Api
{
	private $valor;

	public function __construct($host, $appToken, $user, $password)
	{
		$this->host = $host;
		$this->appToken = $appToken;
		$this->user = $user;
		$this->password = $password;
	}

	public function geraAuthBasic()
	{
		$basic =  base64_encode($this->user .":". $this->password);
		return "Basic " . $basic;
	}

	public function initSession()
	{
		$url = $this->host . "/apirest.php/initSession";
		$cab = array(
                    "Content-Type: application/json",
                    "Authorization: " . $this->geraAuthBasic() . "",
                    "App-Token: " . $this->appToken . ""
                    );

		return $this->curlBase($url, $cab);
	}

	public function getSessionToken($valor)
	{
		$valor = json_decode($valor);
		return $valor->session_token;
	}

	public function getFullSession($token_session)
	{
		$url = $this->host . "/apirest.php/getFullSession";
		$cab = array(
                    "Content-Type: application/json",
                    "Session-Token: " . $token_session . "",
                    "App-Token: " . $this->appToken . ""
                    );

		return $this->curlBase($url, $cab);
	}


	public function getTicket($token_session)
	{
		$url = $this->host . "/apirest.php/Ticket";
		$cab = array(
                    "Content-Type: application/json",
                    "Session-Token: " . $token_session . "",
                    "App-Token: " . $this->appToken . ""
                    );

		return $this->curlBase($url, $cab);
	}

	public function curlBase($url, $cab)
	{
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_URL, $url);
		
		curl_setopt($curl, CURLOPT_HEADER, 0);

		curl_setopt($curl, CURLOPT_HTTPHEADER, $cab);


		$resposta = curl_exec($curl);
		curl_close($curl);

		return $resposta;
	}

	
}