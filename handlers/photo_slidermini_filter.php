<?php 
	require "../libs/db.php";
	$photoSliderMini = R::findAll('slider_mini');
	$sum_array = array();
	foreach ($photoSliderMini as $key) {
		$array = array(
			link => $key->photo_link,
			slider => $key->slider,
		);
		$stack = array($array);
		$sum_array = array_merge($stack, $sum_array);
	}
	echo json_encode($sum_array);
?>