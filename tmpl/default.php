<?php 
// No direct access
defined('_JEXEC') or die; 
/**
* @version 1.0.0
* @package jGram
* @copyright (C) 2015 Nicholas By Design nicholasbydesign.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/



?>

<div id="instafeed"  class="<?php echo 
						  $params->get("get") 
					." ". $params->get("tag_name") 
					." ". $params->get("client_id") 
					." ". $params->get("access_token") 
					." ". $params->get("user_id") 
					." ". $params->get("limit")
					." ". 'columns_' . $params->get("columns")  
					." ". $params->get("resolution")
					." ". $params->get("display")
					." ". $params->get("bubbles")
					;?>">
</div>