<?php
require_once('library/php/function.php');
session();
mysql_con();
mysql_select('social');

$username = $_POST['userforgot'];
$email = $_POST['emailforgot'];
$national = $_POST['nationalforgot'];


if( $username == '' || $email == ''){
	session_msg('message' ,'Error : fill the rows');
	linkbox('./');
}else{
	$q = "SELECT * FROM college WHERE username='$username'";
	$res = @mysql_query($q) or mysql_err();
	$user = @mysql_fetch_array($res,MYSQL_ASSOC);
	if(@mysql_num_rows($res)!=1 || $user['email'] != $email){
		session_msg('message' ,'username & email is not true');
		linkbox('./');
	}else{
		$subject = 'Hello ' . $user['firstname'];
		$message = 'Hello ' . $user['firstname'].'<br>'. 'Password is : ' . $user['repeatpass'];
		if(!@mail("$email","$subject","$message","From: info@asrarcollege.ir")){
			session_msg('message' ,'Email not sending, please try again.');
			linkbox('./');
		}else{
			session_msg('message' , 'Your Password Send To Email.');
			linkbox('./');
		};
	};
};
mysql_close();
?>