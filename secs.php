<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<p>Given that there are 365 days in a year, there are 31,536,000 seconds in a year.</p>

<?php



function years($seconds)
{
	$seconds_in_a_year = 31536000;
	return $seconds / $seconds_in_a_year;
}



$input = array(
	600000000,
	60,
	40000.33);

foreach ($input as $seconds) {
	$yrs = years($seconds);
	echo "$seconds seconds is $yrs years.<br/>";
};

?>
	
</body>
</html>