<?php 
include('variables/sql.inc.php');
include('dbcon/dbconnect.php');
include('variables/title_and_page.inc.php');
include ('variables/dbcon.php');
require_once('dbcon/dbconnect.php');

$result = $pdo->query("SELECT `vidburdur`.`nafn`, `vidburdur`.`timi`, `salur`.`numer` FROM `vidburdur` INNER JOIN `salur` ON `vidburdur`.`salur_id` = `salur`.`id` ORDER BY `vidburdur`.`timi`");
$atburdir = $result->fetchAll();
echo "<table class='table table-hover'>";
echo "<tr><th>Nafn</th><th>Tími</th><th>Salur</th></tr>";
for ($i=0; $i < sizeof($atburdir); $i++) { 
	echo "<tr><td>".$atburdir[$i][0]."</td><td>".$atburdir[$i][1]."</td><td>".$atburdir[$i][2]."</td></tr>";
}
echo "</table>";
?>