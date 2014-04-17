<!DOCTYPE html>
<html>
	<head>
		<?php 
		include('variables/title_and_page.inc.php');
		include('variables/sql.inc.php');
		?>
		<meta charset="utf-8">
	    <title><?php echo ("$title"); ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/custom.css">
	    <!-- Bootstrap -->
	</head>
	<body>
		<div class="container">
		<?php
		include('includes/header.inc'); 
		include('variables/algo.php');
		if ($logedin==true) {
			$page3 = '';
			$page4 = 'Útskráning';
			$p4='?p=logout';
		}
		if ($logedin==false) {
			include('variables/title_and_page.inc.php');
		}
		include('includes/navbar.inc');
		if (isset($_GET['p'])) {
			if ($_GET['p']==4) {
				include('includes/innskra.inc');
			}
			if ($_GET['p']==3) {
				include('includes/nyskra.inc');	
			}
			if ($_GET['p']==2) {
				include('includes/bokun.inc');
			}
			if ($_GET['p']==1) {
				include('includes/atburdir.inc');
			}
			if ($_GET['p']=="logout") {
				setcookie("c_user", hash("sha512", $email), time() -3600, "/");
   				setcookie("c_salt", $salt, time() -3600, "/");
   				echo "Hold on";
   				sleep(1);
				header('Location: ../verkefni 4/');
			}
		}
		include('includes/footer.inc');
		?>
		</div>
		<!--Javascript-->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
