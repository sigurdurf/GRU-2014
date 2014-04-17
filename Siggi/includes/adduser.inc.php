<?php 
	$user_first_name = htmlspecialchars($_POST['first_name']);
	$user_last_name = htmlspecialchars($_POST['last_name']);
	$pin = htmlspecialchars($_POST['pin']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$passcheck = htmlspecialchars($_POST['password_check']);
	$phonenumber = htmlspecialchars($_POST['phone']);
	$salt = crypt("sha512",false);
	if ($_POST['pass']){
	$sha1 = sha1($salt . $password);
	}
	$adduser = "INSERT INTO notendur (user_first_name, user_last_name, user_name, user_password, user_pin, user_phone, user_email)
					VALUES ('$name','$sha1','$email','$phonenumber')";
	//add user
	$add = pdo->prepare($adduser);
	$add->execute();

	
?>