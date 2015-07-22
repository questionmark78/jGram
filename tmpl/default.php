<?php 
// No direct access
defined('_JEXEC') or die; 

?>

<?php 

$client_id 		= $params->get(client_id);
$user_id 		= $params->get(user_id);
$access_token 	= $params->get(access_token);

if($params->get(client_id) == ""){
	echo "Your client id is not filled in.";
}

if($params->get(user_id) == ""){
	echo "Your user id is not filled in";
}

if($params->get(access_token) == ""){
	echo "Your access token is not filled in";
}

if($client_id && $user_id && $access_token != ""){
	include 'layout_one.php';
}
