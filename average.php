<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Average</title>
</head>
<body>

	<p> Wayne suggested using a foreach loop with running sum, but here is a way without that.</p>

	<?php

    function average($numbers){
    	return array_sum($numbers) / count($numbers);
    }    
        
    $numbers = array(1, 2, 3, 4, 5);

    $average = average($numbers);

    echo "$average is the average of the array;"

    ?>

    <p>Here is the second version of this, done with the foreach loop.</p>

    <?php 

    function average_loop($numbers) {
    	$sum = 0;
    	foreach ($numbers as $number) {
    		$sum += $number;
    	};
    	return $sum / count($numbers);
    	}
    
    $numbers = array(1, 2, 3, 4, 5);

    $average_two = average_loop($numbers);
    echo "$average_two";

    ?>
</body>
</html>