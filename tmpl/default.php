<?php 
// No direct access
defined('_JEXEC') or die; 

echo '<div class="jgram-overlay"><a id="jgram-close" href="#">X</a><a id="jgram-prev" href="#">&#10094;</a><a id="jgram-next" href="#">&#10095;</a></div>';

if($params->get('get') == 'tagged'){
	include 'tagged.php';
}else if($params->get('get') == 'user'){
	include 'user.php';
}else if($params->get('get') == 'search'){
	include 'search.php';
}else{
	echo '<h2>You need to make photostream selection</h2>';
}

?>


