
<?php
# þú notar require_once() til að sækja þessa skrá.
# PHP exception try and catch
# Ef þú sleppur að nota catch þá hættir php að keyra ef villa og
# birtir ljóta kóðameldingu handa notanda

try{
# tenging við database með PDO
# nánar á http://is1.php.net/PDO
	
	# tegund og nafn á server, nafn á db og PHP aðgangur
	$pdo = new PDO('mysql:host=tsuts.tskoli.is;dbname=0912962339_lan', '0912962339', 'databass');

	# stillum hann af hvernig hann með höndlar villur
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
 	#echo "Tenging tókst";

?>



