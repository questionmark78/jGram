<?php 
// No direct access
defined('_JEXEC') or die; 

?>

<div id="instafeed"  class="<?php echo 
						  $params->get("get") 
					." ". $params->get("tag_name") 
					." ". $params->get("client_id") 
					." ". $params->get("access_token") 
					." ". $params->get("user_id") 
					." ". $params->get("limit")
					." ". 'columns_' . $params->get("columns")
					." ". 'padding_' . $params->get("padding")   
					." ". $params->get("display")
					." ". $params->get("bubbles")
					;?>">
</div>