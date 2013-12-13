<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exploding strings</title>
</head>
<body>
	
    <?php 

        function explode_string($string){
        	return explode(" ", $string);
        }

        $string = "Here is my string!";

        $words = explode(" ", $string);

        print_r($words);
    ?>


</body>
</html>