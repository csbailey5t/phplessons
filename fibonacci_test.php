<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fibonacci test</title>
</head>
<body>
	
	<?php

	
	$fibarray = array(0, 1);
	for ($i=2; $i < 4000000, $i++) { 
		$fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
	}





?>
</body>
</html>