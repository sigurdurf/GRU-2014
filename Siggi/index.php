<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 

    include 'variables/title_and_page.inc.php';

    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAN</title>
    <link rel="icon" type="image/x-icon" href="img/LOGO.jpg" />
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    </head>
  <body>
    <div class ="container">
    <div class ="row">
  <?php

    include 'includes/navigation.inc.html';
    if (!isset($_GET['p'])) {  
    include 'includes/sidebar.inc.html';
    }
    if (isset($_GET['p'])) {
      if ($_GET['p']==1) {
        include 'includes/pizza.inc.html';
        if ($_GET['tab']==1)
        {
          include 'includes/pizzainfo.inc.html';
        }
        if ($_GET['tab']==2)
        {
          include 'includes/pizzachoose.inc.html';
        }
      }
      if ($_GET['p']==2){
        include 'includes/faq.inc.html';
      }
      if ($_GET['p']==3){
        include 'includes/dbcon.inc.php';
        ?><div class ="col-lg-6"><?php
        include 'includes/signup.inc.html';
        ?></div><div class ="col-lg-6"><?php
        include 'includes/guardian_signup.inc.html';
        ?></div><?php
      }
      
    }

    //include 'includes/slides.inc.html';

  ?>
  </div>
  </div>

    <div class="footer">
    <?php
    //include 'includes/footer.inc.html';
    ?>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="js/tab.js"></script>
  </body>
</html>