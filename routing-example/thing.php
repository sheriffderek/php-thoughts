<?php

/* ROUTER */
$page = $_GET['page']; // coming from the URL
//  mysite.com?key=value&key=othervalue 
// called a "query string"

if ($page == '') {
	$page = 'home';
}

if ($page == 'home') {
	$pageHeading = "Welcome";
}
if ($page == 'design') {
	$pageHeading = "Design";
}
if ($page == 'illustration') {
	$pageHeading = "Illustration";
}
if ($page == 'writing') {
	$pageHeading = "Writing";
}

?>



<head>
	<style>
		body.home {
			background-color: yellow;
		}
		body.design project-card.special {
			background-color: lightgreen;
		}
	</style>
</head>


<body class='<?=$page?>'>
	
	<header>
		<nav>
			<a href='?'>Home</a>
			<a href='?page=design'>Design</a>
			<a href='?page=illustration'>Illustration</a>
			<a href='?page=writing'>Writing</a>
		</nav>
	</header>


	<main>
		<section>
			<h1><?=$pageHeading?></h1>


			<?php if ($page == 'home') { ?>

				<p class='welcome-intro'>
					Hello. Not only am I amazing.... but...
				</p>

			<?php } ?>

		</section>
	</main>

</body>








