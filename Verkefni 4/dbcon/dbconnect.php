
<?php
# þú notar require_once() til að sækja þessa skrá.
# PHP exception try and catch
# Ef þú sleppur að nota catch þá hættir php að keyra ef villa og
# birtir ljóta kóðameldingu handa notanda

try{
# tenging við database með PDO
# nánar á http://is1.php.net/PDO
	
	# tegund og nafn á server, nafn á db og PHP aðgangur

	$pdo = new PDO('mysql:host=localhost;dbname=2909962449_radsefna', '2909962449', 's6i6m6m6i6');
	# stillum hann af hvernig hann með höndlar villur
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
	# Við getum notað exec fyrir INSERT; UPDATE og DELETE
	# Notum utf-8 og gerum það með SQL fyrirspurn exec sendir sql fyrirspurnir til database
	$pdo->exec('SET NAMES "utf8"');
}

#Tegund af undantekningu
catch (PDOException $e){
	
	#skemmtilegri skilaboð til notanda ásamt tæknilegum útksýringum 
	echo "tenging tókst ekki". "<br>" . $e->getMessage();
	exit(); #láta php hætta að keyra.
}
 # bara svona til að sjá hvort tenging tókst (henda svo echo línunni út.)

?>



