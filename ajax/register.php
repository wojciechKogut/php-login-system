<?php 

define("__CONFIG__", true);

/* require config */
require_once("../inc/config.php");
require_once("../inc/classes/Filter.php");
require_once("../inc/classes/User.php");

// require_once("../inc/classes/DB.php");
// $con = DB::getConnection();


if($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($name) && !empty($username) && !empty($email) && !empty($password)) {
        header("Content-type: application/json");
    
        $name = Filter::string($name);
        $username = Filter::string($username);
        $email = Filter::email($email);
        $password = password_hash($password,PASSWORD_BCRYPT,["cost"=>12]);

        $data = User::registerUser($email,$password,$name,$username);
        echo json_encode($data);
    }
    
}else {
    exit("failed");
}