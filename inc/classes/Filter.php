<?php 

class Filter {

    public static function string($string) {
        $string = filter_var($string,FILTER_SANITIZE_STRING);
        $string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
        return $string;
    }
    
    public static function email($email) {
        return $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public static function url($url) {
        return $url = filter_var($url, FILTER_SANITIZE_URL);
    }


}