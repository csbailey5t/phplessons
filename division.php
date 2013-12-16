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
             	$result = $y / $x;
             } else {
             	$result = $x / $y;
             } return $result;
            
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

    <p>I interpreted the problem differently. On Wayne's interpretation:</p>
    <?php 

    function divide ($a, $b){
        if ($b == 0){
            $b = $a;
        } return $a / $b;
    }

     $numbers = array(
            4 => 2,
            2 => 4,
            384 => 0,
            900 => 32);

     foreach ($numbers as $a => $b) {
         $result = divide ($a, $b);
         echo "$result <br>";
     }

     ?>



</body>
</html>