<?php 
require "../libs/db.php";
$news = R::findAll('news');
$sum_array = array();
foreach ($news as $key) {
	$array = array(
		id => $key->id,
		date => $key->date,
		title => $key->title,
		small_description => $key->small_description,
		preview_image => $key->preview_image,
	);
	$stack = array($array);
	$sum_array = array_merge($stack, $sum_array);
}
echo json_encode($sum_array);
 ?>