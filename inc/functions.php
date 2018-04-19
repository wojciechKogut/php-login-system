<?php

require_once("config.php");

function checkIfUserLoggedIn() {
    if(isset($_SESSION['user_id'])) {
        return true;
    }
    return false;
}

function redirect($path) {
    header("Location:" . $path);
}