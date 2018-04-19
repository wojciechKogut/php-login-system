<?php 
    /**
     * if you dont have defined constant config this file not load
     */
    if(!__CONFIG__) exit("You don't have config file");

    define("USER", "root");
    define("ROOT", "/php-login-system");

    if(!isset($_SESSION)) {
        session_start();
    }



?>