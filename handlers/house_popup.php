<?php 
require "../libs/db.php";
$info_house = R::findOne('ready_to_live_houses', 'id = ?', array($_POST['text']));
$photos = R::findAll('photos_of_houses_and_lands', 'id_house = ?', array($info_house->id));
$sum_array = array();
foreach ($photos as $key) {
	$array = array(
		link => $key->photo_link,
	);
	$stack = array($array);
	$sum_array = array_merge($stack, $sum_array);
}
$global_array = array(
	id => $info_house->id,
	land_number => $info_house->land_number,
	square_house => $info_house->square_house ,
	square_land => $info_house->square_land,
	price => $info_house->price,
	description => $info_house->description,
	room_amount => $info_house->room_amount,
	small_description => $info_house->small_description,
	plan_image => $info_house->plan_image,
	project_name => $info_house->project_name,
	links => $sum_array,
);
echo json_encode($global_array);
 ?>