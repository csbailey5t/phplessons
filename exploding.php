<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exploding strings</title>
</head>
<body>
	
    <?php 

        function explode_string($string){
            $words = explode(" ", $string);
        	return $words;
        }

        $string = "Here is my string!";

        $words = explode_string($string);

    ?>

    <p><?php echo "$string" ?></p>
    
    <p><?php print_r($words); ?></p>    

    <p><?php var_dump($words); ?></p>        

</body>
</html>