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
            <li><a href="#">Home</a></li>
            <li><a href="#">Pizza</a></li><!--Put pizza.html/php there-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="#">About LNT</a></li>
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
    </nav><!--enof fucking nav-->
    <div class="col-lg-6">
    <h2>Hvað er LNT?</h2>
    <p>Við erum nemendurnir sem að</p>
    </div>
        <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5" id="leftCol">
                
        <div class="well"> 
                <ul class="nav nav-stacked" id="sidebar">
                  <li><a href="#sec1">Section 1</a></li>
                  <li><a href="#sec2">Section 2</a></li>
                  <li><a href="#sec3">Section 3</a></li>
                  <li><a href="#sec4">Section 4</a></li>
                </ul>
          </div>
          </div>
          </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>