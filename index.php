<?php 

define("__CONFIG__", true);

/* require config */
require_once("inc/config.php");
require_once("inc/functions.php");



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Home page</title>

    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Lorem ipsum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="<?php echo ROOT_FOLDER ?>/login.php">Login</a></li>
            <li><a href="<?php echo ROOT_FOLDER ?>/register.php">Registration</a></li>
        <?php  if(checkIfUserLoggedIn()) : ?>
            <li><a href="<?php echo ROOT_FOLDER ?>/logout.php">Logout</a></li>
            <li><a href="<?php echo ROOT_FOLDER ?>/dashboard.php">Dashboard</a></li> 
        <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top: 100px;
    text-align: center;">

      <div class="starter-template">
        <h1>Lorem ipsum dolor sit amet, consectetur</h1>
        <p class="lead">Morbi mattis nisi et risus sodales finibus. Morbi aliquet, massa sit amet auctor finibus. Morbi nibh odio, euismod nec ipsum non, dignissim varius libero. Vivamus varius magna sit amet velit faucibus congue.<br> Donec auctor, dolor ac rhoncus rhoncus, leo est ornare risus, sed tempor tortor mauris vitae tortor..</p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
