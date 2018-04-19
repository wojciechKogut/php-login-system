<?php 

define("__CONFIG__", true);

/* require config */
require_once("../inc/config.php");
require_once("../inc/classes/Filter.php");

require_once("../inc/classes/DB.php");
$con = DB::getConnection();


if($_SERVER['REQUEST_METHOD'] == "POST") {
    header("Content-type: application/json");

    $data = [];

    $data['name'] = Filter::string($_POST['name']);
    $data['username'] = Filter::string($_POST['username']);
    $data['email'] = Filter::email($_POST['email']);
    $data['password'] = password_hash($_POST['password'],PASSWORD_BCRYPT,["cost"=>12]);

    /** check if user exist */
    $findUser = $con->prepare("SELECT * from users WHERE email = :email LIMIT 1 ");
    $findUser->bindParam(":email",$data['email']);
    $findUser->execute();

    if($findUser->rowCount() == 1){
        $data['err'] = "You have an account";
    }else {
        
        /** add user to database */
        $addUser = $con->prepare("INSERT INTO users (email,password,username) VALUES(:email,:password,:username)");
        $addUser->bindParam(":email",$data['email']);
        $addUser->bindParam(":password",$data['password']);
        $addUser->bindParam(":username",$data['username']);
        $addUser->execute();
        $data['redirect'] = "/dashboard.php";
    }
    
    /** convert php value into json value */
    echo json_encode($data);
}else {
    exit("failed");
}