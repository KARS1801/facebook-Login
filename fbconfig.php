<?php

session_start();

require_once "Facebook/autoload.php";

$fb = new \Facebook\Facebook([
  'app_id' => '923131797846230',
  'app_secret' => 'b0dbbd10981e94dd1eb53b80d6c24b61',
  'default_graph_version' => 'v2.10',
  
]);

$helper = $fb->getRedirectLoginHelper();


?>