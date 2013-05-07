<?php
session_start();
include ('connection.php');
$user=$_POST['nickname'];
$passwd=$_POST['passwd'];
$hash= md5($passwd);
$result=mysql_fetch_assoc($connection -> getResults("SELECT `Password`FROM `user`WHERE `Username` LIKE ` ".$user,"1"));
if ($result['Password'] == $hash) 
{
	echo "Passwort identisch";
	$_SESSION['Username'] = $user;
}