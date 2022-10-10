<?php

$host = explode('?', $_SERVER['REQUEST_URI']);

$path=$host[0];
	$num = substr_count($path, '/');
	$route = explode('/', $path)[$num];
if(strstr($_SERVER['REQUEST_URI'],'?')){
	$id=urldecode($host[1]);
}
//----------------------------------------------

if ($route == '' OR $route == 'index.php') {
	Controller::StartSite();
} else {
	Controller::error404();
}

?>