<?php
	ob_start();
	session_start();


	include_once("functions.inc.php");
	$functions = new functions();
	$stime = $functions->getmicrotime();


	include_once("config.inc.php");
	$config = new config();
	if(!$config->installed) { header("location:start"); exit; }

	//
	if(function_exists("date_default_timezone_set")) date_default_timezone_set($config->site_timezone);

	include_once("libs/mi.adodb.php");
	$db = dbconn($config->db_host, $config->db_username, $config->db_password, $config->db_database, $config->db_type);
//	$db->debug=1;


	include_once("libs/mi.smarty.php");
	$smarty = new MySmarty("libs/smarty");
	$smarty->setTemplate($config->dir_template);
	$smarty->setCache("caches");
	$smarty->setPlugin("../../plugins");


	include_once("template.inc.php");
	$segment = array();
	$uri = "";
	$template = new template();
	$template->content = preg_replace("/(\.\.\/)+/i", $config->site_url, $template->content);
	$template->content = preg_replace("/\<\?PHP(.*)exit;(.*)\?\>\r\n/i", "", $template->content);	
	echo $template->content;
		

//	echo "<p align='center'>System Execute ". round(($functions->getmicrotime()-$stime), 4). " Seconds.</p>";
	ob_end_flush();
?>