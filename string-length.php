<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String length</title>
</head>
<body>


	<?php

		function string_length($string) {
			return strlen($string);
		}

		
		$string = "Here is my string!";

		$length = string_length($string);


		echo "The length of '$string' is $length.";



		?>

	
</body>
</html>