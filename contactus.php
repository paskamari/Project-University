<?php

require_once('library/php/function.php');

session();

$firstname = $_POST['firstname'];
$youremail = $_POST['youremail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = 'info@asrarcollege.ir';

if(!@mail("$to","$subject","$message","From: $youremail")){
	session_msg('message' , 'Email not sending, please try again.');
	linkbox('./');
}else{
	session_msg('message' , 'Your message has been sent.');
	linkbox('./');
};

?>