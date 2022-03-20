<?php

namespace App\models;

use Dotenv\Dotenv;
use PDOException;

abstract class Conexao
{
    static $instance;

    public static function connect()
    {
        if(!isset(self::$instance))
        {
            try{
                $env = Dotenv::createUnsafeImmutable(dirname($_SERVER['SCRIPT_FILENAME']));
                $env->load();
                self::$instance = new \PDO("mysql:host=" .getenv('HOST'). "; dbname=" .getenv('DBNAME'), getenv('USER'), getenv('PASS'));
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        return self::$instance;
    }
}