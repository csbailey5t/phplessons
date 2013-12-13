<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Average</title>
</head>
<body>
	<?php

	/* Wayne suggested using a foreach loop with running sum, but here is a way without that */
        
        $numbers = array(1, 2, 3, 4, 5);

        $sum = array_sum($numbers);
        $count = count($numbers);
        $average = $sum / $count;
        echo $average;

    ?>
</body>
</html>