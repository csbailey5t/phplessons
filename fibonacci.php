<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fibonacci Sum</title>
</head>
<body>

    <p>What I need to do:

        <ul>
            <li>generate the fibonacci array </li>
            <li>have a sum variable that will keep track of sum</li>
            <li>use modulus to check if value is even</li>
            <li>use foreach loop to increase the sum value</li>
            <li>Eric suggested beginning at the high end, to see if there is a value at 4 million and then build from there</li>
            <li>will need to use memoization I assume</li>

        </ul>

        </p>
	<?php

        $fib_array = [];

	    function fibonacci($n){
            global $fib_array;
            if (array_key_exists($n, $fib_array)) {
                return $fib_array[$n];
            }
        	if ($n == 1) {
        		return 1;
        	} elseif ($n == 2) {
        		return 2;
        	} else {
        		return fibonacci($n-1) + fibonacci($n-2);
        	}
    }

    echo fibonacci(6);

    ?>
</body>
</html>