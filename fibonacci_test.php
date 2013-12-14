<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fibonacci test</title>
</head>
<body>
	
	<?php

	function fibonacci($n){
		if ($n == 0) {
			return 0;
		} elseif ($n == 1) {
			return 10;
		} elseif ($n == 2) {
			return 20;
		}else {
			return fibonacci($n-1) + fibonacci($n-2);
		}
	}

	echo fibonacci(5);

	?>
</body>
</html>