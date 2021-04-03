<?php 
	require "rb.php";

	R::setup( 'mysql:host=localhost;dbname=cs71915_iberia','cs71915_iberia', '12102000' );
	if(!R::testConnection()) die('No DB connection!');
	
	header('Cache-Control: no cache');
	session_cache_limiter('private_no_expire');
?>