
<?php

require_once(DOCUMENT_ROOT . ROOT_FOLDER . "/vendor/autoload.php");
use Illuminate\Database\Capsule\Manager as Capsule;

class DB {

    public static $capsule;

    public static function connection() {
        self::$capsule = new Capsule;

        self::$capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'login_system',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ]);

        self::$capsule->bootEloquent();
    }
}

DB::connection();