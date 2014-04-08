<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAN</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LNT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Pizza</a></li><!--Put pizza.html/php there-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">About LNT</a></li>
                <li class="divider"></li>
                <li><a href="#">About the LAN</a></li>
              </ul>
            </li>
          </ul>


          <!--begin of extra--><form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search teh databass"><!-- extra feature don't really need but would be great in future-->
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form><!--endof extra-->


          <ul class="nav navbar-nav navbar-right">
            <li><button type="submit" class="btn btn-default">Sign in</button><li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
          </nav>
    <div class ="jumbotron">
      <h1>Welcome to LAN</h1>
      <p>dorem ipsum le dorkles comes hur le dur</p>
      <p><a class="btn btn-primary btn-lg" role="button" href ="faq.html">Learn more</a></p>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>