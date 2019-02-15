<?php 
require "config.php";
require "db.php";

//Роутер
$uri = rtrim( $_SERVER["REQUEST_URI"], "/");
$uri = substr( filter_var($uri, FILTER_SANITIZE_URL), 1);
$uri = explode('?', $uri);



switch( $uri[0] ) {
	case '':
//		echo "Main Page";
		include "modules/main/index.php";
		break;
	case 'about':
//		echo "About Page";
		include "modules/about/index.php";
		break;
	case 'contacts':
		include "modules/contacts/index.php";
		break;
	case 'blog':
//		echo "Blog Page";
		include "modules/blog/index.php";
		break;
	default:
//		echo "No page";
		include "modules/main/index.php";
		break;
}
?>