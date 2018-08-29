<?php
require_once "fbconfig.php";


try {
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $accessToken = $helper->getAccessToken();
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if(!accessToken)
{
	header('Location: register.php');
	exit();
}

$oAuth2Client=$fb->getOAuth2Client();
if(!$accessToken->isLongLived())
{
	$accessToken=$oAuth2Client->getLongLivedAccessToken($accessToken);
}

$response=$fb->get("/me?fields=name,email,picture.type(large)",$accessToken);
$userData=$response->getGraphNode()->asArray();

$_SESSION['userdata']=$userData;
$_SESSION['accesstoken']=$accessToken;

header('Location: index.php');
exit();

?>