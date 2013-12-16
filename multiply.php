<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication</title>
</head>
<body>

	<?php
	function multiply($x, $y)
		{
			$result = $x * $y;
			return $result;
		}

	$integers = array(
		4 => 2,
		0 => 4,
		900 => 32,
		299999 => 23);

	foreach ($integers as $x => $y) {
		$result = multiply($x, $y);
		echo "When you multiple $x and $y, you get $result <br>";
	}

	?>

	
</body>
</html>