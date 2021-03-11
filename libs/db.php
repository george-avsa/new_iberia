<?php 
	require "rb.php";

	R::setup( 'mysql:host=localhost;dbname=new_iberia','root', 'root' );
	if(!R::testConnection()) die('No DB connection!');
	
	header('Cache-Control: no cache');
	session_cache_limiter('private_no_expire');
?>