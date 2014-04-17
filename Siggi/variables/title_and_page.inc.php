<?php
$title;
//page is name of <a> tag
//p is directory
//we could make this is into a loop but not really inmportant
$active= 'active';
$pizzasale='on';
$page1 = 'Pizza';
$page2 = 'FAQ';
$page3 = 'Nyskráning';
$page4 = 'Innskráning';
$page5 = 'Panta Pizzu';
$page6 = 'Veldu Sjálfur';
$page7 = 'Pizza Roulette';
$p1='?p=1&tab=1'; 
$p2='?p=2';
$p3='?p=3';
$p4='?p=4';
$p5='?p=1&tab=1';
$p6='?p=1&tab=2';
$p7='?p=1&tab=3';
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