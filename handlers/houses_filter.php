<?php 
require "../libs/db.php";
$houses = R::findAll('ready_to_live_houses');
$sum_array = array();
$discount = R::findall('discount');
$date = date('Y-m-d');
$todays_discount = '';
foreach ($discount as $key) {
	$date_start = date("Y-m-d", strtotime($key->start));
	$date_finish = date("Y-m-d", strtotime($key->finish));
	if ($date_finish >= $date and $date >= $date_start) {
		$todays_discount = $key;
	}
}
foreach ($houses as $key) {
	if (isset($todays_discount) and $todays_discount->minimum < $key->square_house and $todays_discount->maximum > $key->square_house and $todays_discount->land_or_house == 1) {
		$array = array(
			id => $key->id,
			land_number => $key->land_number,
			square_house => $key->square_house ,
			square_land => $key->square_land,
			price => $key->price,
			small_description => $key->small_description,
			preview_image => $key->preview_image,
			room_amount => $key->room_amount,
			discount_today => $todays_discount->size,
		);	
	}
	else {
		$array = array(
			id => $key->id,
			land_number => $key->land_number,
			square_house => $key->square_house ,
			square_land => $key->square_land,
			price => $key->price,
			small_description => $key->small_description,
			preview_image => $key->preview_image,
			room_amount => $key->room_amount,
			discount_today => '',
		);
	}
	$stack = array($array);
	$sum_array = array_merge($stack, $sum_array);
}
echo json_encode($sum_array);
 ?>