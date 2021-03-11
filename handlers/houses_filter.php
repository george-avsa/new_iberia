<?php 
require "../libs/db.php";
$houses = R::findAll('ready_to_live_houses');
$sum_array = array();
foreach ($houses as $key) {
	$array = array(
		id => $key->id,
		land_number => $key->land_number,
		square_house => $key->square_house ,
		square_land => $key->square_land,
		price => $key->price,
		small_description => $key->small_description,
		preview_image => $key->preview_image,
		room_amount => $key->room_amount,
	);
	$stack = array($array);
	$sum_array = array_merge($stack, $sum_array);
}
echo json_encode($sum_array);
 ?>