<?php
require_once('library/php/function.php');
session();
mysql_con();
mysql_select('social');
$username = $_POST['userlogin'];
$password = $_POST['passlogin'];
if( $username == '' || $password == ''){
	
	session_msg('message' ,'خطا : لطفا دوباره امتحان کنید');
	linkbox('./');
	
}else{
		
	$q = "SELECT * FROM college WHERE username='$username' ";
	
	$res = @mysql_query($q) or mysql_err();
	$user = @mysql_fetch_array($res,MYSQL_ASSOC);

	if(@mysql_num_rows($res)!=1 || $user['repeatpass'] != $password){
		session_msg('message' ,'شماره دانشجویی و رمز عبورتان اشتباه است');
		linkbox('./');
	}else{
		login();
		$trak = $user['trak']+1;
		$q = "UPDATE college SET trak='$trak' WHERE username = '$username'";
		$res = @mysql_query($q) or mysql_err();
		session_msg('username' ,$user['username']);
		session_msg('email' ,$user['email']);
		session_msg('firstname' ,$user['firstname']);
		session_msg('lastname' ,$user['lastname']);
		session_msg('national' ,$user['nationalcode']);
		session_msg('time' ,$user['time']);
		session_msg('trak' ,$user['trak']);
		$name = $user['firstname'] .' '. $user['lastname'];
		session_msg('message' ,"$name خوش آمدید");
		mysql_close();
		linkbox('./');
	};
};
mysql_close();
?>