<?php 
require "../libs/db.php";
$discount = R::findAll('discount');
$sum_array = array();
foreach ($discount as $key) {
	$array = array(
		start => $key->start,
		finish => $key->finish
	);
	$stack = array($array);
	$sum_array = array_merge($stack, $sum_array);
}
echo json_encode($sum_array);
?>