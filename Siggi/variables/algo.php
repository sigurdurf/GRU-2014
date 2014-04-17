<?php 
include ('variables/dbcon.php');

$logedin = false;
 if (isset($_COOKIE['c_user'])&&isset($_COOKIE['c_salt'])) {
 	$cuser = mysql_real_escape_string($_COOKIE['c_user']);
 	$csalt = mysql_real_escape_string($_COOKIE['c_salt']);
 	$user = mysql_fetch_array(mysql_query("SELECT * FROM `einstaklingur` WHERE `salt` = '$csalt'"));

 	if ($user != null) {
 		if (hash("sha512", $user['e-mail'])==$cuser) {
 			$logedin = true;
 		}
 		else
 			$logedin = false;
 	}
 }
?>