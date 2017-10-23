<?php
session_start();
// måste lägga till rewrite_module i apache modules
header('Content-type: text/html; charset=utf-8');
$URI_parsed = parse_url($_SERVER['REQUEST_URI']);
$URI_parts  = explode('/', $URI_parsed['path']);

print_r ($URI_parts);
require "top.php";
require "menu.php";
require "bottom.php";
require "article_start.php";
require "article_om.php";


require "dbconnect.php";

if($URI_parts[3]==null || $URI_parts[3]==""){

header('Location: /teststart2018/site_template/start');
exit;

}
if ($URI_parts[3] == 'check'){



	}else
if ($URI_parts[3] == 'start'){

	top();
	menu();

	article_start(null);
	bottom();

	}else if ($URI_parts[3] == 'logout'){

	$_SESSION=array();
	session_regenerate_id(true);
	header('Location: /site_template/start');
	}else

if ($URI_parts[3] == 'skapa_konto'){

	top();
	menu();
	article_skapa_konto();
	bottom();

	}else
if ($URI_parts[3] == 'om'){


	top();
	menu();
	article_om();
	bottom();


	}	else{
	header("HTTP/1.0 404 Not Found");
	echo"sökta sidan finns inte";

	}
