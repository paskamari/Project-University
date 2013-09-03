<?php
require_once('library/php/function.php');
session();
mysql_con();
mysql_select('social');

$username = $_SESSION['username'];
$national = $_POST['nationalpro'];
$email = $_POST['emailpro'];
$firstname = $_POST['fnamepro'];
$lastname = $_POST['lnamepro'];

if ($username == '' || $national == '' || $email == '' || $firstname == '' || $lastname == ''){
	session_msg('message' ,'جاهای خالی را پر کنید');
	linkbox('./');
}else{
	$q = "UPDATE college SET nationalcode='$national',email='$email',firstname='$firstname',lastname='$lastname' WHERE username = '$username'";
	$res = @mysql_query($q) or mysql_err();
	$user = @mysql_fetch_array($res,MYSQL_ASSOC);
	
	session_msg('national' ,$national);
	session_msg('email' ,$email);
	session_msg('firstname' ,$firstname);
	session_msg('lastname' ,$lastname);
	mysql_close();
	session_msg('message' ,'تغییرات با موفقیت ثبت شد');
	linkbox('./');
};

?>