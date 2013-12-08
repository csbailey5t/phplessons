<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Praxis Potluck</title>
</head>
<body>

	
	<?php 
		
		$name = $_GET['name'];

		$contrib = array(
			"Scott" => "spicy cream corn.",
			"Jeremy" => "smoked pork shoulder or chicken soup.",
			"Bethany" => "wine and cheese.",
			"Eric" => "mac and cheese.",
			"Veronica" => "stuffed squash and bbq pulled chicken.",
			"Steph" => "spinach pie.",
			"Francesca" => "big, tasty salad.",
			"Ronda" => "baked dessert.");

		
		if ($name == "Scott") {
		echo $name." is bringing ".$contrib["$name"];
		};


		if ($name == "Jeremy") {
		echo $name." is bringing ".$contrib["$name"];
		};

		if ($name == "Bethany") {
		echo $name." is bringing ".$contrib["$name"];
		};

		if ($name == "Eric") {
		echo $name." is bringing ".$contrib["$name"];
		};

		if ($name == "Veronica") {
		echo $name." is bringing ".$contrib["$name"];
		};

		if ($name == "Steph") {
		echo $name." is bringing ".$contrib["$name"];
		};

		if ($name == "Francesca") {
		echo $name." is bringing ".$contrib["$name"];
		};

		if ($name == "Ronda") {
		echo $name." is bringing ".$contrib["$name"];
		};
		
	
		
	?>


	

	

	



	
</body>
</html>