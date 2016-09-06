<?php
/**
* 
*/
class Api
{
	private $valor;

	public function __construct($host, $appToken)
	{
		$this->host = $host;
		$this->appToken = $appToken;
	}

	public function init($user, $password)
	{
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
		$erro = "0";
		$return_token = "";
		$url = $this->host . "/apirest.php/initSession";
		$cab = array(
                    "Content-Type: application/json",
                    "Authorization: " . $this->geraAuthBasic() . "",
                    "App-Token: " . $this->appToken . ""
                    );

		$return = $this->curlBase($url, $cab);
		$return = json_decode($return);

		if (!isset($return->session_token)) {
			if ($return[0] == "ERROR_GLPI_LOGIN") {
				$erro = "1";
			}
		}
		else {
			$return_token = $return->session_token;
		}
		
		return array("session_token" => $return_token, "erro" => $erro);
	}

	public function getSessionToken($valor)
	{
		//$valor = json_decode($valor);
		return $valor["session_token"];
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

	public function countTicketOpen($ticket)
	{
		$cnt = count($ticket);
		$aberto = 0;
		for ($i=0; $i < $cnt; $i++) { 
			if ($ticket[$i]->status != '6' and $ticket[$i]->status != '5' ) {
				$aberto++;
			}
			
		}
		return $aberto;
	}

	public function getProblem($token_session)
	{
		$url = $this->host . "/apirest.php/Problem";
		$cab = array(
                    "Content-Type: application/json",
                    "Session-Token: " . $token_session . "",
                    "App-Token: " . $this->appToken . ""
                    );

		return $this->curlBase($url, $cab);
	}

	public function countProblemOpen($problem)
	{
		$cnt = count($problem);
		$aberto = 0;
		for ($i=0; $i < $cnt; $i++) { 
			if ($problem[$i]->status != '6' and $problem[$i]->status != '5' ) {
				$aberto ++;
			}
		}
		return $aberto;
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