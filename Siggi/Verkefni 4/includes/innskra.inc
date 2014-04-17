<?php 
include('variables/sql.inc.php');
include('dbcon/dbconnect.php');
include('variables/title_and_page.inc.php');
include ('variables/dbcon.php');

if (isset($_POST['email'])&&$_POST['password']) {
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string(hash("sha512", $_POST['password']));
  $user = mysql_fetch_array(mysql_query("SELECT * FROM `einstaklingur` WHERE `e-mail`='$email'"));
   if ($user == null) {
     die("Notandi eða Lykilorð er vitlaust <a href='?p=4'> Til baka</a>");
   }
   if ($user['password'] != $password) {
     die("Notandi eða Lykilorð er vitlaust");
   }
   $salt = hash("sha512", rand() . rand() . rand());
   setcookie("c_user", hash("sha512", $email), time() + 60*60, "/");
   setcookie("c_salt", $salt, time() + 60*60, "/");
   $userID= $user['id'];
   mysql_query("UPDATE `einstaklingur` SET `salt`='$salt' WHERE id='$userID'");
   $name = mysql_fetch_array(mysql_query("SELECT `nafn` FROM `einstaklingur` WHERE `e-mail`='$email'"));
   header('Location: ../verkefni 4/');

}
include "variables/algo.php";
if (!$logedin) {
echo "
<div class='row'>
  <div class='col-lg-4 bord'>
    <form role='form' method='post' action=''>
      <div class='form-group'>
        <label for='exampleInputEmail1'>Póstur:</label>
        <input name='email' type='text' class='form-control' id='exampleInputEmail1' placeholder='Sláðu inn tölvupóstinn þinn'>
      </div>
      <div class='form-group'>
        <label for='exampleInputPassword1'>Lykilorð:</label>
        <input name='password' type='password' class='form-control' id='exampleInputPassword1' placeholder='Lykilorð'>
      </div>
      <button value='Login' type='submit' class='btn btn-default'>Submit</button>
    </form>
  </div>
</div>";
}
?>