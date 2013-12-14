<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Smallest word</title>
</head>
<body>

	<?php function smallest_number($x, $y){
		if ($x < $y){
			return $x;
		} elseif ($y < $x){
            return $y;
		} else {
			return "$x and $y are the same";
		}
	}
	?>

    <p><?php 
        $smallest_number = smallest_number(12, 8);
        echo $smallest_number;
        ?></p>

    <p><?php 
        $equal_number = smallest_number(8, 8);
        echo $equal_number; 
        ?></p>
</body>
</html>