<?php 
require "../libs/db.php";
$photos = R::findAll('header_slider', 'season = ?', array($_POST['idseason']));
$count = 0;
$sum_array = array();
foreach ($photos as $key) {
	$array = array(
		link => $key->photo_link,
	);
	$count++;
	$stack = array($array);
	$sum_array = array_merge($stack, $sum_array);
}
$global_array = array(
	count => $count,
	links => $sum_array,
);
echo json_encode($global_array);
?>