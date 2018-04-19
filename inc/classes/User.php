<?php

/* require config */
require_once(DOCUMENT_ROOT . ROOT_FOLDER. "/inc/config.php");
require_once(DOCUMENT_ROOT . ROOT_FOLDER ."/vendor/autoload.php");

require_once(DOCUMENT_ROOT . ROOT_FOLDER . "/inc/classes/Filter.php");
require_once(DOCUMENT_ROOT . ROOT_FOLDER ."/inc/classes/DB.php");

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model {

    /** it must be id not user_id */
    protected $fillable = ["id","username","password","email"];
    public $timestamps = ["created_at", "updated_at"];


    public static function findById($id){
        return self::find($id);
    }

    public static function findAll(){
        return self::all();
    }



    public static function logUser($email,$password) {
        $data = [];
        $data['email'] = $email;

        $user = self::where("email",$email)->first();


        /*
         * 1 param - password from form
         * 2 param - hash
         */
        if(password_verify($password,$user->password)) {
            $data["user_id"] = $user->id;
            $_SESSION["user_id"] = $user->id;
            $data['redirect'] = ROOT_FOLDER . "/dashboard.php";
        } else {
            $data["err"] = "Invalid credential. Try again";
        }
        return $data;
    }




    public static function registerUser($email,$password,$name,$username) {
        $user = self::where("email",$email)->first();

        $data = [];

        if($user) {
            $data['err'] = "You have an account";
        }else {
            self::create(["email"=>$email, "password"=>$password, "name"=>$name, "username"=>$username]);
            $user = self::where("email",$email)->first();
            $_SESSION['user_id'] = $user->id;
            $data['redirect'] = ROOT_FOLDER . "/dashboard.php";
        }

        /** data will be reeturned to js script */
        return $data;
    }

    

}