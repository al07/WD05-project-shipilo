<?php

	define("DB_HOST", "localhost");
	define("DB_NAME", "project");
	define("DB_LOGIN", "root");
	define("DB_PASSWORD", "");

/*
Установить путь до корневой директории скрипта по протоколу HTTP
*/
	define('HOST', "{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/");
	define('ROOT', dirname(__FILE__).'/');

?>