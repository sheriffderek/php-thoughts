<style>
	
body {
	background: hsla(0, 30%, 50%, .5);
}



</style>



<?php

$myStuff = [1, "Burrito", true, false, "Derek", "Ivy"];

$favorite_thing = $myStuff[1];

echo "<section class='things-i-like'>";
echo "<p>";
echo "My favorite things are ";

$dog = [
	"id" => 120,
	"name" => "Bandit",
	"deceased" => true,
	"breed" => ["dingo", "Austratial sheep dog"],
];

echo $dog["name"];

echo " and ";

echo $favorite_thing;

echo "s.";


echo "</section>";

?>


<p>My favorite thing is my <?=$favorite_thing?>.</p>

<p>My favorite dog is <?=$dog["name"]?>.</p>
