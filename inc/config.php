<?php 
    /**
     * if you dont have defined constant config this file not load
     */
    if(!__CONFIG__) exit("You don't have config file");
    
    $root = realpath($_SERVER['DOCUMENT_ROOT']);
    define("DOCUMENT_ROOT", $root);

    define("USER", "root");
    define("ROOT_FOLDER", "/php-login-system");

    if(!isset($_SESSION)) {
        session_start();
    }



?>