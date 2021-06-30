<?php

$pageTitle = 'Projects';

include('../header.php');

?>

<section class='name'>
	<inner-column>

		<h1 class='loud-voice'>Projects</h1>

		<p class='calm-voice'>Here they are:</p>

	</inner-column>
</section>



<section class='name'>
	<inner-column>

		<?php include('../projects_data.php'); ?>

		<ul>
			<?php foreach ($projects as $project) { ?>
			<li>
				<a href='<?php echo $_COOKIE['siteRoot'] ?>/projects/<?=$project["key"]?>'>
					<h3 class='attention-voice'>
						<span><?=$project["title"]?></span>
					</h3>
				</a>
			</li>
			<?php } ?>
		</ul>

	</inner-column>
</section>



<?php include('../footer.php'); ?>
