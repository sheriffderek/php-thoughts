<!doctype html>

<?php
	$page = $_GET['page']; // url?page=string
	include('monster_data.php'); // $monster_data
	$current_monster_id = $_GET['monster'];

	$uri = $_SERVER['REQUEST_URI'];
	echo $uri;

	if ($current_monster_id) {
		$style = $current_monster_id;
	} elseif ($page == "list") {
		$style = $page;
	}

	$homePage = ($page == "" or $page == "home");
	$listPage = $page == "list";
	$detailPage = $page == "detail";
?>

<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title><?=$pageTitle?></title>
		<meta name='description' content='[[insert description]]'>
		<meta property='og:image' content='images/default.png'>

		<link rel='stylesheet' href='css/site.css'>
	</head>


	<body class='<?=$style?>'>
		<header>
			<nav>
				<a href='?page=home'>Welcome</a>
				<a href='?page=list'>Monsters</a>
			</nav>
		</header>

		<main>
			<?php if ($homePage) { ?> 
				<h1>Welcome</h1>
			<?php } ?>


			<?php if ($listPage) { ?> 
				<?php include('monster-loop.php'); ?>
			<?php } ?>


			<?php if ($detailPage) { ?> 
				<?php include('detail.php'); ?>
			<?php } ?>
		</main>

		<footer>
			<p>page: <?=$page?></p>
		</footer>
	</body>	
</html>