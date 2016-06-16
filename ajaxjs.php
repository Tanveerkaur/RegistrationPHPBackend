<?php

include_once('db.php');

$userid = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email_add']);
$vemail = mysql_real_escape_string($_POST['vemail_add']);
$password = mysql_real_escape_string(md5($_POST['password']));
$vpassword = mysql_real_escape_string(md5($_POST['vpassword']));
$mobNum = mysql_real_escape_string($_POST['mobile']);
$address = mysql_real_escape_string($_POST['address']);

$sql = "INSERT INTO userdata (userid, email, vemail, password, vpassword, mobile, address) VALUES ('$userid', '$email', '$vemail', '$password', '$vpassword', '$mobNum', '$address')";

if(mysql_query($sql))
	echo "Registration successful";
else
	echo "Registration unsuccessful. Please try again!";

?>