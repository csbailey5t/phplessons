<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Longest Word</title>
</head>
<body>

<p>
	<?php
	$sentence = "The quick brown fox jumped over the lazy dogs.";
	echo $sentence;
	?>
</p>

<?php 
   $words = explode(" ", $sentence);
   $longest_word = " ";   
   foreach ($words as $word) {
       if(strlen($word) > strlen($longest_word)){
       	$longest_word = $word;
       }   
   }
   echo "$longest_word is the longest word in the sentence.";
?>        
	
</body>
</html>