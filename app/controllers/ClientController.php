<?php

namespace App\controllers;
use App\models\Client;

class ClientController
{
    public function index()
    {
        return Client::all();
        
    }

    public function show($id)
    {
        return Client::find($id);
    }
}