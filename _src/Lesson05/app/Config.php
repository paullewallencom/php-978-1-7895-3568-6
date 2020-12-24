<?php namespace App;

class Config {
//Declaring class methods as static makes them accessible without needing an instantiation of the class
    public static function get()
    {
        return [
            //set the namespace for routing
            'namespace' => 'App\Controllers\\',

            //set default controller
            'default_controller' => 'Home',

            //set default method
            'default_method' => 'index',
        ];
    }
}
