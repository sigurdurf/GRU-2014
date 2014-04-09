<?php 
include('variables/sql.inc.php');
include('dbcon/dbconnect.php');
include('variables/title_and_page.inc.php');
include ('variables/dbcon.php');
include ("variables/algo.php");
require_once('dbcon/dbconnect.php');
if ($logedin == false) {
	$result = $pdo->query("SELECT `vidburdur`.`id`, `vidburdur`.`nafn`, `vidburdur`.`timi`, `salur`.`numer` FROM `vidburdur` INNER JOIN `salur` ON `vidburdur`.`salur_id` = `salur`.`id` ORDER BY `vidburdur`.`timi`");
	$atburdir = $result->fetchAll();
}
if ($logedin == true) {
	$result1 = $pdo->query("SELECT `vidburdur`.`id`, `vidburdur`.`nafn`, `vidburdur`.`timi`, `salur`.`numer`, `einstaklingur`.`id`FROM `vidburdur` 
INNER JOIN `salur` ON `vidburdur`.`salur_id` = `salur`.`id` 
LEFT OUTER JOIN `bokun` ON `bokun`.`vidburdur_id`= `vidburdur`.`id`
LEFT OUTER JOIN `einstaklingur` ON `bokun`.`einstaklingur_id`= `einstaklingur`.`id`
WHERE einstaklingur.id IS NULL OR einstaklingur.id != $user[id];
ORDER BY `vidburdur`.`timi`");
	$atburdi = $result1->fetchAll();
}

if ($logedin==false) {
	echo "<h1>Þú verður að vera inskráður til að bóka</h1>";
}
echo "<form action='' method='post'>";
echo "<table class='table table-hover'>";
echo "<tr>";
if ($logedin==true) {
	echo "<th></th>";
}
echo "<th>Nafn</th><th>Tími</th><th>Salur</th></tr>";
for ($i=0; $i < sizeof($atburdir); $i++) { 
	echo "<tr>";
	if ($logedin==true) {
		echo "<td><input type='checkbox' name='check[]' value='".$atburdir[$i][0]."'>";
	}
	echo "</td><td>".$atburdir[$i][1]."</td><td>".$atburdir[$i][2]."</td><td>".$atburdir[$i][3]."</td></tr>";
}
echo "</table>";
if ($logedin==true) {
	echo "<button value='register' type='submit' class='btn btn-default'>Skrá</button>";
}
echo "</form>";
if (isset($_POST['check'])) {
	$thing=$_POST['check'];
	for ($i=0; $i < sizeof($_POST['check']) ; $i++) { 
		$result2 = $pdo->exec("INSERT INTO `bokun` (`einstaklingur_id`, `vidburdur_id`, `skráð`) VALUES ('$user[0]', '$thing[$i]', CURRENT_DATE());");
		$result2->fetchAll();
	}
}
?>