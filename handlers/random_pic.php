<?php 
require "../libs/db.php";
$photos = R::findAll('header_slider');
$photo = array_rand($photos);
$rand_photo = R::findOne('header_slider', 'id = ?', array($photo));
echo $rand_photo->photo_link;
 ?>