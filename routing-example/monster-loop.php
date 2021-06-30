
<ol>
	<?php foreach ($monster_data as $monster) { ?>

		<?php
			$link = "?page=detail&monster=" . $monster["uniqueId"];
		?>

		<li>
			<monster-card>
				<h2><?=$monster['name']?></h2>

				<p><?=$monster['story']?></p>

				<p>Age: <?=$monster['age']?></p>

				<a href='<?=$link?>'>Meet me</a>
			</monster-card>
		</li>
	<?php } ?>
</ol>
