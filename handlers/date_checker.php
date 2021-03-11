<?php 
require "../libs/db.php";
$date = date('Y-m-d', mktime(23, 0, 0, $_POST['month'], $_POST['day'], $_POST['year']));
$discounts = R::findAll('discount');
foreach ($discounts as $key) {
	$date_start = date("Y-m-d", strtotime($key->start));
	$date_finish = date("Y-m-d", strtotime($key->finish));
	if ($date_finish >= $date and $date >= $date_start) {
		echo $key;
	}
}
?>