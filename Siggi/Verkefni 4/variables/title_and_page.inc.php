<?php
$title; 
$active= 'active';
$page1 = 'Athafnir';
$page2 = 'Bókun';
$page3 = 'Nyskráning';
$page4 = 'Innskráning';
$p4='?p=4';
$p3='?p=3';
$p2='?p=2';
$p1='?p=1';
$email;
$password;
$user;
$logedin = false;
if (isset($_GET['p']))
{
	if ($_GET['p']==1)
	{ 
		$title=$page1;
	}
	else if ($_GET['p']==2)
	{ 
		$title=$page2;
	}
	else if ($_GET['p']==3)
	{ 
		$title=$page3;
	}
	else if ($_GET['p']==4)
	{ 
		$title=$page4;
	}
}
else
{
	$title='Forsíða';
}
?>  