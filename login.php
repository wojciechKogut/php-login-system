<?php
define("__CONFIG__", true);

/* require config */
require_once("inc/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Login</title>
</head>
<body>
        <div class = "container">
            <div class="wrapper">
                <div class="formWrapper" style="">
                    <form action="" method="post" name="Login_Form" class="form-signin">       
                        <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                        <hr class="colorgraph"><br>
                        
                        <input type="email" class="form-control" name="email" placeholder="Email"  autofocus="autofocus" />
                        <div class="alert alert-danger" id="errEmail" style="display: none"></div>
                        <input type="password" class="form-control" name="password" placeholder="Password"/>     		  
                        <div class="alert alert-danger" id="errPassword" style="display: none"></div>
                        <div class="alert alert-danger" id="errAjax" style="display: none"></div>	
                        <button class="btn btn-lg btn-primary btn-block" value="Login" type="submit">Login</button>  	
                        	
                    </form>		
                </div>	
            </div>
        </div>

        <script src="assets/js/main.js"></script>
</body>

</html>