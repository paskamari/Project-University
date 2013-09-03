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
	session_msg('message' , mysql_errno() . mysql_error() );
	linkbox('./');
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

function getFiles($path,$type1,$type2,$type3){
    $files = scandir($path);

    foreach ($files as $file){
        $temp = explode('.',$file);
        $file_type = strtolower( end($temp) ); // JPG => jpg
        if($file_type == $type1 || $file_type == $type2 || $file_type == $type3){
            $images[] = $file;
        }
    }

    if(isset($images)){
        return $images;   
    }
}