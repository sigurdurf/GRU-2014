<?php 
include('variables/sql.inc.php');
include('dbcon/dbconnect.php');
include('variables/title_and_page.inc.php');
include ('variables/dbcon.php');

if (isset($_POST['name'])) {
	if ($_POST['password_1']==$_POST['password_2']) {
		if (isset($_POST['email'])&&isset($_POST['password_1'])) {
			$name = mysql_real_escape_string($_POST['name']);
			$email = mysql_real_escape_string($_POST['email']);
			$password = mysql_real_escape_string(hash("sha512", $_POST['password_1']));
			$kennitala= mysql_real_escape_string($_POST['kennitala']);
			$simi = mysql_real_escape_string($_POST['simi']);

			$check = mysql_fetch_array(mysql_query("SELECT * FROM `einstaklingur` WHERE `e-mail`='$email'"));
			if ($check != null) {
				die("Þetta netfang er búið að skrá");
			}
			$salt = hash("sha512", rand() . rand() . rand());
			mysql_query("INSERT INTO `einstaklingur` (`id` ,`nafn` ,`simi` ,`kennitala` ,`e-mail` ,`password` ,`salt`)VALUES ('00', '$name', '$simi', '$kennitala', '$email', '$password', '$salt');");
			setcookie("c_user", hash("sha512", $email), time() + 60*60, "/");
    		setcookie("c_salt", $salt, time() + 60*60, "/");
    		die("Þú ert komin með account");
		}
		else
			die("Lykilorðin passa ekki <a href'?p=3'>Til baka </a>");
	}
}
echo "
<div class='row'>
	<div class='col-lg-4 bord'>
		<form role='form' method='post' action=''>
			<div class='form-group'>
				<lable for='naff'><b>Nafn:</b></label>
				<input name='name' type='text' class='form-control' id='naff' placeholder='Nafn'>
			</div>
			<div class='form-group'>
				<label for='pass'>Lykilorð:</label>
				<input name='password_1' type='password' class='form-control' id='pass' placeholder='Lykilorð'>
			</div>
			<div class='form-group'>
				<input name='password_2' type='password' class='form-control' id='passs' placeholder='Endurtaktu lykilorð'>
			</div>
			<div class='form-group'>
				<label for=kennnitala>Kennitala:</label>
				<input name='kennitala' type='text' class='form-control' id='kennnitala' placeholder='Kennitala'>
			</div>
			<div class='form-group'>
				<label for='emmail'>Netfang:</label>
				<input name='email' type='email' class='form-control' id='emmail' placeholder='Netfang'>
			</div>
			<div class='form-group'>
				<label for='phone'>Símanúmer:</label>
				<input name='simi' type='text' class='form-control' id='phone' placeholder='Símanúmer'>
			</div>
			<button value='register' type='submit' class='btn btn-default'>Skrá</button>
		</form>
	</div>
</div>
";
?>