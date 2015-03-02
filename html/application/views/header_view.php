<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RoD</title>
  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  
    <style type="text/css">

  ::selection{ background-color: #E13300; color: white; }
  ::moz-selection{ background-color: #E13300; color: white; }
  ::webkit-selection{ background-color: #E13300; color: white; }


  body {
    background-image:url("../../resources/bg_dark.png");
    padding-top: 70px;
  }

  .dark{
      background-color: black;
      background-image: none;
      border: none;
      color: white;
  }


</style>
</head>
<body>

<div id="container">

<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="main">RoD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
              <div class="navbar-form navbar-left">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Java/C++/Assembly">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default" aria-label="Search">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                  </span>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
              <ul class="nav navbar-nav navbar-right">

                <!--Notificações a serem implementadas mais tarde-->
                <!--
                <li>
                    <a href="#">Notificações <span class="badge">0</span></a>
                </li>
                -->

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nome<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="profile">Perfil</a></li>
                           <li><a href="settings">Definições</a></li>
                           <li class="divider"></li>
                           <li><a href="/">Sair</a></li>
                        </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

</div>

</body>
</html>