<?php
	require_once('library/php/function.php');
	session();
	$name = $_SESSION['firstname'] .' '. $_SESSION['lastname'];
	
	logout();
	session();
	session_msg('message' , " $name به امید بازدید دوبارتان");
	linkbox('./');
?>