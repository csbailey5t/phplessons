<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Praxis Potluck</title>
</head>
<body>

	<h1>Foods for the Praxis Potluck</h1>

	<?php 
		$contrib = array(
			"Scott" => "spicy cream corn",
			"Jeremy" => "smoked pork shoulder or chicken soup",
			"Bethany" => "wine and cheese",
			"Eric" => "mac and cheese",
			"Veronica" => "stuffed squash and bbq pulled chicken",
			"Steph" => "spinach pie",
			"Francesca" => "big, tasty salad",
			"Ronda" => "baked dessert",);
	?>

	<p>Here is what each person has committed to bring:</p>

	<ul>
		<?php foreach ($contrib as $name => $food): ?>
			
			<li><?php echo "$name will bring $food."; ?>
		
		<?php endforeach; ?>
	</ul>

	<p>All in all, this will give us <?php echo count($contrib);?> contributions to the potluck.</p>


	
</body>
</html>