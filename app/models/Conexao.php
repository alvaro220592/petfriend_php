<?php

namespace App\models;

use Dotenv\Dotenv;
use PDOException;

class Conexao
{
    static $instance, $host, $dbname, $charset, $user, $pass;

    static function env($dir)
    {
        // $env = Dotenv::createUnsafeImmutable($dir);
        // $env->load();
        // self::$host     = getenv('HOST');
        // self::$dbname   = getenv('DBNAME');
        // self::$charset  = getenv('CHARSET');
        // self::$user     = getenv('USER');
        // self::$pass     = getenv('PASS');
        echo $dir;
    }

    public static function connect()
    {
        if(!isset(self::$instance))
        {
            try{
                // self::env('env');
                // self::$instance = new \PDO("mysql:host=".self::$host."; dbname=".self::$dbname."; charset=".self::$charset, self::$user, self::$pass );
                self::$instance = new \PDO("mysql:host=localhost; dbname=petfriend_php; charset=utf8", 'estudo', '' );
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        return self::$instance;
    }
}