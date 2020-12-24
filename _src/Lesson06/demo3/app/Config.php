<?php namespace App;

class Config {

    public static function get()
    {
        return [
            //set the namespace for routing
            'namespace' => 'App\Controllers\\',

            //set default controller
            'default_controller' => 'Home',

            //set default method
            'default_method' => 'index',

            //database
            'db_type'     => 'mysql',
            'db_host'     => 'localhost:8889',
            'db_name'     => 'packt_database',
            'db_username' => 'root',
            'db_password' => 'root',
        ];
    }
}
