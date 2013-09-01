<?php
require_once('library/php/function.php');
session();
mysql_con();
mysql_select('social');

$username = $_POST['userforgot'];
$email = $_POST['emailforgot'];
$national = $_POST['nationalforgot'];

if( $username == '' || $email == ''){
	session_msg('message' ,'خطا : لطفا دوباره امتحان کنید');
	linkbox('./');
}else{
	$q = "SELECT * FROM college WHERE username='$username'";
	$res = @mysql_query($q) or mysql_err();
	$user = @mysql_fetch_array($res,MYSQL_ASSOC);
	if(@mysql_num_rows($res)!=1 || $user['email'] != $email){
		session_msg('message' ,'خطا : شماره داشجویی شما با پست الکترونیکی که وارد کردید همخوانی ندارد');
		linkbox('./');
	}else{
		$subject = 'Hello ' . $user['firstname'];
		$message = 'Hello ' . $user['firstname'].'<br>'. 'Password is : ' . $user['repeatpass'];
		if(!@mail("$email","$subject","$message","From: info@asrarcollege.ir")){
			session_msg('message' ,'خطا در ارسال لطفا دوباره امتحان کنید');
			linkbox('./');
		}else{
			session_msg('message' , 'رمز عبور با موفقیت ارسال شد');
			linkbox('./');
		};
	};
};
mysql_close();
?>