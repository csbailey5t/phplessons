<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Time Traveler Problem</title>
</head>
<body>

	<?php

		$year = 1800;

		if ($year < 1900) {
			echo "Welcome wonderful visitor from the past!";
		} elseif ($year <= 1990 && $year <= 2020) {
			echo "Welcome visitor from the relatively contemporary time period. Couldn't find somewhen better?";
		} else {
			echo "Welcome visitor from the far future. How did we last that long?";
		}
	?>
	
</body>
</html>