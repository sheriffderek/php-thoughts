<!doctype html>
<?php
	//
	// define("SITE_URL", dirname( dirname($_SERVER['SERVER_NAME']) ));

   // $path = $_SERVER['DOCUMENT_ROOT'];
   // $path .= "/common/header.php";
   // include_once($path);

	// this will only work if we route everything through the root index.php
	define('ROOT', getcwd());


	// this would also mean including a file from  the root dir
	// and if you know how to get to the root dir then just add `../` where necessary

	// function getRoot() {
	// 	// echo dirname(__FILE__);
	// 	return ROOT;
	// 	// http://localhost:8888/Users/sheriffderek/Documents/pe-projects/php-folder-structure/css/site.css
	// 	// this isn't going to cut it
	// }

	// AND... if the sub-folder indexes share the header - how can that be relative - if it's not included yet.

	// Maybe this is a server configuration instead// folder structure included in the emsil
?>
<?php /* another way <base href="<?=$path?>/style.css"> in head? */ ?>

<html>
	<?php include('head.php'); ?>

	<body>
		<?php // would be nice to have this here... include('project_data.php');?>

		<header class='site-header'>
			<inner-column>
				<?php include('components/site-menu.php'); ?>
			</inner-column>
		</header>

		<main class='page-content'>
			<!-- page stuff -->
