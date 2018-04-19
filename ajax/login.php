<?php


define("__CONFIG__", true);

/* require config */
require_once("../inc/config.php");
require_once("../inc/classes/Filter.php");
require_once("../inc/classes/User.php");



if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $email = Filter::string($_POST['email']);
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) {
        header("Content-type: application/json"); 
        $data = User::logUser($email,$password);
        echo json_encode($data);
    }
    
}else {
    exit("failed");
}