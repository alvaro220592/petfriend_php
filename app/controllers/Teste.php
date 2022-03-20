<?php

namespace App\controllers;

use Dotenv\Dotenv;

class Teste{
    public function index(){
        return "Autoload OK";
    }

    public function env($dir)
    {
        $env = Dotenv::createUnsafeImmutable($dir);
        $env->load();
        return getenv('TESTE');
    }
}