<?php
	

	require "lib/rb-mysql.php";
	R::setup('mysql:host=localhost;db_name=project', DB_LOGIN, DB_PASSWORD);
	R::freeze(true);

	$details = R::find('testabout');

	die("test");
?>