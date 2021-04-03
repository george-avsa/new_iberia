<?php 
require "../libs/db.php";


function cmp_function_desc($a, $b){
	return ($a['date'] < $b['date']);
}


$news = R::findOne('news', 'id = ?', array($_POST['text']));
$recom_news = R::findAll('news');
$sum_array = array();
foreach ($recom_news as $key) {
	$array = array(
		id => $key->id,
		date => $key->date,
		title => $key->title,
		text1 => $key->text1,
		text2 => $key->text2,
		image => $key->image,
		back_image => $key->back_image,
	);
	$stack = array($array);
	$sum_array = array_merge($stack, $sum_array);
}
uasort($sum_array, 'cmp_function_desc');

$global_array = array(
	news_one => $news,
	recomended => $sum_array,
);
echo json_encode($global_array);

 ?>