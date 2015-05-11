<?php
/**
* @version 1.0.0
* @package jGram
* @copyright (C) 2015 Nicholas By Design nicholasbydesign.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

 
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$doc = JFactory::getDocument();

//fancybox
if($params->get("display") === "false"){
	$doc->addScript("modules/mod_jgram/js/jquery.fancybox.js");	
	$doc->addScript("modules/mod_jgram/js/jquery.fancybox.pack.js");
	$doc->addScript("modules/mod_jgram/js/helpers/jquery.fancybox-buttons.js");	
	$doc->addScript("modules/mod_jgram/js/helpers/jquery.fancybox-media.js");
	$doc->addScript("modules/mod_jgram/js/helpers/jquery.fancybox-thumbs.js");

	$doc->addStyleSheet('modules/mod_jgram/js/jquery.fancybox.css');
	$doc->addStyleSheet('modules/mod_jgram/js/helpers/jquery.fancybox-buttons.css');	
	$doc->addStyleSheet('modules/mod_jgram/js/helpers/jquery.fancybox-thumbs.css');	
}

//add scripts
$doc->addScript("modules/mod_jgram/js/instafeed.js");
$doc->addScript("modules/mod_jgram/js/feeddisplay.js");


//add styles
$doc->addStyleSheet("modules/mod_jgram/styles/style.css");
	
 
$jgram = modJgramHelper::getJGram($params);
require JModuleHelper::getLayoutPath('mod_jgram');