<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reverse String</title>
</head>
<body>
	
	<?php
    
    function reverse_string($string) {
    	$reversed_string = strrev($string);
        return $reversed_string;
    } 

    $string = "Here is my String!";

    $reversed_string = reverse_string($string);

    echo "If you reverse '$string,' you get '$reversed_string.'";


	?>

</body>
</html>