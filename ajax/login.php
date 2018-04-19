<?php


define("__CONFIG__", true);

/* require config */
require_once("../inc/config.php");
require_once("../inc/classes/Filter.php");

require_once("../inc/classes/DB.php");
$con = DB::getConnection();


if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $email = Filter::string($_POST['email']);
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) {
        header("Content-type: application/json");

        $data = [];
    
        $data['email'] = $email;
        
    
        /** check if user exist */
        $findUser = $con->prepare("SELECT * from users WHERE email = :email LIMIT 1 ");
        $findUser->bindParam(":email",$data['email']);
        $findUser->execute();

        $results = $findUser->fetch(PDO::FETCH_ASSOC);
    
        if(password_verify($password,$results['password'])) {
            $userId = $results['user_id'];
            $_SESSION['user_id'] = $userId;
            $data['redirect'] = ROOT . "/dashboard.php";
        }else {

            $data["err"] = "Invalid credential. Try again";
        }
        
        /** convert php value into json value */
        echo json_encode($data);
    }
    
}else {
    exit("failed");
}