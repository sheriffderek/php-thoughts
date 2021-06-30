
<?php
	foreach ($monster_data as $record) {
		if ($record["uniqueId"] == $current_monster_id) {
			$monster = $record;
			break;
		}
	}
?>

<section>
<inner-column>

	<h1><?=$monster['name']?></h1>

	<p><?=$monster['name']?>'s detail page!</p>

</inner-column>
</section>



<section>
<inner-column>

	<?php 
		$without_current_monster = [];
		foreach ($monster_data as $record) {
			if ($record["uniqueId"] !== $current_monster_id) {
				array_push($without_current_monster, $record);
			}
		}
	?>
	<?php $monster_data = $without_current_monster; ?>
	<?php include('monster-loop.php'); ?>

</inner-column>
</section>
