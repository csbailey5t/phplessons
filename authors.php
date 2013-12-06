<?php 
$authDeath = array(
	"Charles Dickens" => "1870",
	"William Thackeray" => "1863",
	"Anthony Trollope" => "1882",
	"Gerard Manley Hopkins" => "1889",
	);

foreach ($authDeath as $name => $date):
?>

<li>
	<?php echo "$name died in $date"; ?>
</li>

<?php endforeach; ?>