<?php
require_once('lang.php');
require_once('i18n.php');

function protecao()
{

	if(isset($_SESSION['session_token'])) { }
	else
	{ 
		echo "<script>window.location='login.php'</script>";
	}

}

function checkInstall()
{
	if (!file_exists('inc/config.php')) {
		echo "<script>window.location='_instalar/'</script>";
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
	        $ticket = "<span class='label label-warning'>" . __('Processando (atribuído)') ."</span>";
	        break;
	    case '3':
	        $ticket = "<span class='label label-warning'>" . __('Processando (planejado)') ."</span>";
	        break;
	    case '4':
	        $ticket = "<span class='label label-danger'>" . __('Pendente') ."</span>";
	        break;
	    case '5':
	        $ticket = "<span class='label label-success'>" . __('Solucionado') ."</span>";
	        break;
	    case '6':
	        $ticket = "<span class='label label-default'>" . __('Fechado') ."</span>";
	        break;
	    default:
	        $ticket = "<span class='label label-primary'>---</span>";
	        break;
	}

	return $ticket;
}

?>