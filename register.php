<?php
require_once('library/php/function.php');
session();
mysql_con();
mysql_select('social');
$username = $_POST['userreg'];
$password = $_POST['passreg'];
$repeatpass = $_POST['repeatpassreg'];
$email = $_POST['emailreg'];
$firstname = $_POST['fnamereg'];
$lastname = $_POST['lnamereg'];
$national = $_POST['nationalreg'];
$univer = $_POST['univerreg'];
$field = $_POST['fieldreg'];
$degree = $_POST['degreereg'];
$time = time() + (8.5 * 60 *60);
$from = 'info@asrarcollege.ir';
$subject = 'Registered';
$message ="
Dear $firsname $lastname
<br>Below is your logon info as you have just requested.
<br>*****************************************
<br>Your username is: $username
<br>Your password is: $repeatpass
<br>*****************************************
<br>Thank you for using AsrarCollege.ir.
<br>Team AsrarCollege

<br>https://www.asrarcollege.ir

<br><br>University Website : http://www.asrar.ac.ir" ;

if ($username == '' || $national == '' || $email == '' || $password != $repeatpass){
	session_msg('message' ,'تمام گزينه ها را كامل كنيد ');
	linkbox('./');
}else if(@mail("$email","$subject","$message","From: $from")){
		session_msg('message' , 'اشكال در ثبت نام . لطفا مجددا امتحان كنيد.');
		linkbox('./');
	}else{
		$passmd5 = md5($password);
		$q = "INSERT INTO college(username,password,repeatpass,email,firstname,lastname,nationalcode,time,degree,field,univer) VALUES('$username','$passmd5','$repeatpass','$email','$firstname','$lastname','$national',$time,'$degree','$field','$univer')";
		@mysql_query($q) or mysql_err();
		mysql_close();
		session_msg('message' ,'ثبت نام با موفقيت انجام شد');
		session_msg('username' ,$username);
		session_msg('email' ,$email);
		session_msg('firstname' ,$firstname);
		session_msg('lastname' ,$lastname);
		session_msg('national' ,$national);
		session_msg('time' ,$time);
		login();
		linkbox('asrar.php');
	};	
mysql_close();
?>