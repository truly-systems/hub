<?php
session_start();
include 'src/Api.php';


// $app_token = "o52xh7xoo7yjq62csasgnuek17cbv4sj9ugp2eeql";
// $user_token = "q24xm4b49hlntjb1s0k7bl38v5mnspeirhgelrht0";

//$api = new Api("http://localhost/glpi", "w4xp74y3aa59n9d1hollryxb7n34ce80i6zp0yrk0", "glpi", "glpi");

$api = new Api("http://localhost/glpi", "o52xh7xoo7yjq62csasgnuek17cbv4sj9ugp2eeql");
$api->init("glpi", "glpi");
$return = $api->initSession();
// echo "<pre>";
// var_dump($api->initSession());
// echo "</pre>";


//$token_session =  $api->getSessionToken($api->initSession());
//echo "dd:" . $_SESSION["session_token"];

echo "<pre>";
//  print_r(json_decode($api->getProblem($_SESSION["session_token"])));
// print_r($api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"]))));

print_r(json_decode($api->getTicket($_SESSION["session_token"])));
print_r($api->getTicketsContent($api->getTicket($_SESSION["session_token"])));

 //print_r($api->getActiveProfile($return["session_token"]));
//print_r($api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"]))));

echo "</pre>";


// $feed = file_get_contents("http://trulymanager.com/v1/feed/");
// $rss = new SimpleXmlElement($feed);

// foreach($rss->channel->item as $entrada) {
// 	$titulo = $entrada->title;
// 	$link = $entrada->link;

// 	echo "$titulo - $link <br>";
// }

