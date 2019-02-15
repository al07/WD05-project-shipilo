<?php
	

	require "lib/rb-mysql.php";
	R::setup('mysql:host=localhost;dbname=project', DB_LOGIN, DB_PASSWORD);
	R::freeze(true);


?>