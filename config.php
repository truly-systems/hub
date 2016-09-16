<?php
define("LANG",'en_US');

$dados_api = array(
		"host" => "http://localhost/glpi",
		"app_token" => "o52xh7xoo7yjq62csasgnuek17cbv4sj9ugp2eeql"  // DEV2
		//"app_token" => "w4xp74y3aa59n9d1hollryxb7n34ce80i6zp0yrk0" // MAC
	);

function protecao(){

	if(isset($_SESSION['session_token'])) { }
	else
	{ 
		echo "<script>window.location='login.php'</script>";
	}

}

function convertDataView($data)
{
	$dthr = explode(" ",$data);
	$dt = explode("-",$dthr[0]);
	return $dt[2] ."/". $dt[1] ."/". $dt[0] ." ". $dthr[1];
}

function casesStatus($status)
{
	switch ($status) {
	    case '1':
	        $ticket = "<span class='label label-primary'>Novo</span>";
	        break;
	    case '2':
	        $ticket = "<span class='label label-warning'>Processando (atribuído)</span>";
	        break;
	    case '3':
	        $ticket = "<span class='label label-warning'>Processando (planejado)</span>";
	        break;
	    case '4':
	        $ticket = "<span class='label label-danger'>Pendente</span>";
	        break;
	    case '5':
	        $ticket = "<span class='label label-success'>Solucionado</span>";
	        break;
	    case '6':
	        $ticket = "<span class='label label-default'>Fechado</span>";
	        break;
	    default:
	        $ticket = "<span class='label label-primary'>---</span>";
	        break;
	}

	return $ticket;
}

?>