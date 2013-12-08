<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Praxis Potluck</title>
</head>
<body>

	
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

	<?php 

		echo _GET["name"] . "will bring" . $contrib(_GET["name"]);

	?>	
	

	

	



	
</body>
</html>