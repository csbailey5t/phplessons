<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Population of Madeup-landia</title>
</head>
<body>
	<?php 

    $fib_array = [];

    function population($year){
        global $fib_array;
        if (array_key_exists($year, $fib_array)){
            return $fib_array[$year];
        }
    	if ($year == 1) {
    		return 10;
    	} elseif ($year == 2) {
    		return 20;
    	} else {
    		$fib_value = population($year-1) + population($year-2);
            $fib_array[$year] = $fib_value;
            return $fib_value;
    	}
    }

    echo "The population after 10 years is ".population(10)."<br />";
    echo "The population after 20 years is ".population(20)."<br />";
    echo "The population after 100 years is ".population(37);

    ?>

</body>
</html>