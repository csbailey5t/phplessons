<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Average</title>
</head>
<body>
	<?php

	/* Wayne suggested using a foreach loop with running sum, but here is a way without that */

    function average($numbers){
    	return array_sum($numbers) / count($numbers);
    }    
        
    $numbers = array(1, 2, 3, 4, 5);

    $average = average($numbers);

    echo "$average is the average of the array;"

    ?>
</body>
</html>