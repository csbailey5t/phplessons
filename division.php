<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Division</title>
</head>
<body>
	<?php

        function division($x, $y)
        {
            if ($y == 0) {
             	return $y / $x;
             } else {
             	return $x / $y;
             }
            
        }

        $numbers = array(
        	4 => 2,
        	2 => 4,
        	384 => 0,
        	900 => 32);

        foreach ($numbers as $x => $y) {
        	$result = division($x, $y);
        	echo "$result <br>";
        }
        

       

	?>
</body>
</html>