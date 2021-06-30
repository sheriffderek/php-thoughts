<?php

// this goes in the project root
if($_SERVER['REQUEST_URI'] == '/'){
	setcookie('siteRoot', '', 0);
	$_COOKIE['siteRoot'] = '';
} else {
	setcookie('siteRoot', $_SERVER['REQUEST_URI'], 0);
	$_COOKIE['siteRoot'] = $_SERVER['REQUEST_URI'];
}

?>

<?php

$pageTitle = 'Home';

include('header.php');

?>



<section class='name'>
	<inner-column>

		<h1 class='loud-voice'>Home</h1>

		<p class='calm-voice'>Hello. This is the home page.</p>

	</inner-column>
</section>



<?php include('footer.php'); ?>
