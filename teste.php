<?php
// session_start();
include 'src/Api.php';


// // $app_token = "o52xh7xoo7yjq62csasgnuek17cbv4sj9ugp2eeql";
// // $user_token = "q24xm4b49hlntjb1s0k7bl38v5mnspeirhgelrht0";

// //$api = new Api("http://localhost/glpi", "w4xp74y3aa59n9d1hollryxb7n34ce80i6zp0yrk0", "glpi", "glpi");

$api = new Api("http://demo.trulysystems.com/glpi/apirest.php", "ea7hdxpex2agunikllma6clophkqyoicyoubmkqjm");
$api->init("demo_br", "demo_br");
//$return = $api->initSession();
// echo "<pre>";
// var_dump($api->initSession());
// echo "</pre>";


$token_session =  $api->getSessionToken($api->initSession());
// echo "dd:" . $_SESSION["session_token"];

echo "<pre>";

print_r($token_session);
// print_r($return);
// //  print_r(json_decode($api->getProblem($_SESSION["session_token"])));
// // print_r($api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"]))));

// //print_r(json_decode($api->getTicket($_SESSION["session_token"])));
// //print_r($api->getTicketsContent($api->getTicket($_SESSION["session_token"])));

print_r($api->getActiveProfile($token_session));
echo "------------";
print_r($api->getActiveProfileName($api->getActiveProfile($token_session)));


// //print_r($api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"]))));

echo "</pre>";


// // $feed = file_get_contents("http://trulymanager.com/v1/feed/");
// // $rss = new SimpleXmlElement($feed);

// // foreach($rss->channel->item as $entrada) {
// // 	$titulo = $entrada->title;
// // 	$link = $entrada->link;

// // 	echo "$titulo - $link <br>";
// // }
// // 


// echo base64_encode("demo_br:demo_br");
// echo "<br>";


// $s = base64_encode("api:api123");
// $s2 = base64_encode("{api}:{api123}");



// $url = "http://tm.trulysystems.com/glpi/api/initSession";
// 		$cab = array(
//                     "Content-Type: application/json",
//                     //"Authorization: Basic $s2",
//                     "App-Token: 9d4z2xi8nh5oe3ozxvc0lenpvil6n4bwgfwidfq2w"
//                     );

// $curl = curl_init();

// 		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// 		curl_setopt($curl, CURLOPT_URL, $url);
		
// 		curl_setopt($curl, CURLOPT_HEADER, 0);

// 		curl_setopt($curl, CURLOPT_USERPWD, $s);

// 		curl_setopt($curl, CURLOPT_HTTPHEADER, $cab);


// 		$resposta = curl_exec($curl);
// 		curl_close($curl);

// 		print_r($resposta);


// print_r($cab);


// // curl -X GET \
// // -H 'Content-Type: application/json' \
// // -H "Authorization: Basic YXBpOmFwaTEyMw==" \
// // -H "App-Token: 9d4z2xi8nh5oe3ozxvc0lenpvil6n4bwgfwidfq2w" \
// // 'http://tm.trulysystems.com/glpi/apirest.php/initSession'

 
// // curl -X GET \
// // -H 'Content-Type: application/json' \
// // -H "Authorization: Basic Z2xwaTpnbHBp" \
// // -H "App-Token {f7g3csp8mgatg5ebc5elnazakw20i9fyev1qopya7}" \
// // 'http://tm.trulysystems.com/glpi/apirest.php/initSession'






// // curl -X GET \
// // -H 'Content-Type: application/json' \
// // -H "Authorization: user_token wxqft04kmuwv32ncls2whpd2e3z8l88i6yyy83itw" \
// // -H "App-Token: 9d4z2xi8nh5oe3ozxvc0lenpvil6n4bwgfwidfq2w" \
// // 'http://tm.trulysystems.com/glpi/apirest.php/initSession'
// // 


// curl -X GET \
// -H 'Content-Type: application/json' \
// -H "Authorization: Basic Z2xwaTpnbHBp" \
// -H "App-Token: f7g3csp8mgatg5ebc5elnazakw20i9fyev1qopya7" \
// 'http://tm.trulysystems.com/glpi/apirest.php/initSession'