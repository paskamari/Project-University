<?php
require_once('library/php/jdf.php');

function session(){
	session_start();
};

function mysql_con(){
	@mysql_connect('localhost' , 'root' , '') or mysql_err();
	
};

function mysql_select($db_database){
	@mysql_select_db($db_database) or mysql_err();
};

function mysql_err (){
	session_msg('mysql_errno' , mysql_errno() );
	session_msg('mysql_error' , mysql_error() );
	linkbox('error.php');
};

function session_msg($name , $msg){
	$_SESSION[$name] = $msg;
};

function login(){
	session_msg('vrd','vrd');
};

function logout(){
	session_destroy();
};

function linkbox($href){
	header("Location: $href");
	exit();
};

function doctype($type){
	header("Content-type: $type");
};

function gzip(){
	if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");
};

?>