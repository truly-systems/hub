<?php
include 'src/Api.php';


// $app_token = "o52xh7xoo7yjq62csasgnuek17cbv4sj9ugp2eeql";
// $user_token = "q24xm4b49hlntjb1s0k7bl38v5mnspeirhgelrht0";

$api = new Api("http://localhost/glpi", "o52xh7xoo7yjq62csasgnuek17cbv4sj9ugp2eeql", "glpi", "glpi");

// echo "<pre>";
// var_dump($api->initSession());
// echo "</pre>";


$token_session =  $api->getSessionToken($api->initSession());


echo "<pre>";
print_r(json_decode($api->getTicket($token_session)));
echo "</pre>";
