<?php
// session_start();
// include 'src/Api.php';


// // $app_token = "o52xh7xoo7yjq62csasgnuek17cbv4sj9ugp2eeql";
// // $user_token = "q24xm4b49hlntjb1s0k7bl38v5mnspeirhgelrht0";

// //$api = new Api("http://localhost/glpi", "w4xp74y3aa59n9d1hollryxb7n34ce80i6zp0yrk0", "glpi", "glpi");

// $api = new Api("http://try.trulymanager.com/glpinew", "ftaj9fx0uwzncj3estkhojvm6d1vu7cazmt93rhwn");
// $api->init("glpi", "glpi");
// $return = $api->initSession();
// // echo "<pre>";
// // var_dump($api->initSession());
// // echo "</pre>";


// $token_session =  $api->getSessionToken($api->initSession());
// echo "dd:" . $_SESSION["session_token"];

// echo "<pre>";

// print_r($token_session);
// print_r($return);
// //  print_r(json_decode($api->getProblem($_SESSION["session_token"])));
// // print_r($api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"]))));

// //print_r(json_decode($api->getTicket($_SESSION["session_token"])));
// //print_r($api->getTicketsContent($api->getTicket($_SESSION["session_token"])));

// //print_r($api->getMyEntities($return["session_token"]));
// //print_r($api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"]))));

// echo "</pre>";


// // $feed = file_get_contents("http://trulymanager.com/v1/feed/");
// // $rss = new SimpleXmlElement($feed);

// // foreach($rss->channel->item as $entrada) {
// // 	$titulo = $entrada->title;
// // 	$link = $entrada->link;

// // 	echo "$titulo - $link <br>";
// // }
// // 





$url = "http://try.trulymanager.com/glpinew/apirest.php/initSession";
		$cab = array(
                    "Content-Type: application/json",
                    "Authorization: ".base64_encode("glpi:glpi")."",
                    "App-Token: ftaj9fx0uwzncj3estkhojvm6d1vu7cazmt93rhwn"
                    );

$curl = curl_init();

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_URL, $url);
		
		curl_setopt($curl, CURLOPT_HEADER, 0);

		curl_setopt($curl, CURLOPT_HTTPHEADER, $cab);


		$resposta = curl_exec($curl);
		curl_close($curl);

		print_r($resposta);