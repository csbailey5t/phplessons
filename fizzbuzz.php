<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FizzBuzz Problem</title>
</head>
<body>

<?php

for ($i=1; $i <= 100; $i++) { 
	if ($i % 3 == 0 && $i % 5 !== 0) {
		echo "Fizz, ";
	} elseif ($i % 3 !== 0 && $i % 5 == 0) {
		echo "Buzz, ";
	} elseif ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz, ";
	} else {
		echo "$i, ";
	}
}
?>


	
</body>
</html>