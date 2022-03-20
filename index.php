<?php

use App\controllers\ClientController;
use App\controllers\TesteController;
use App\models\Conexao;

include_once __DIR__ . "/vendor/autoload.php";

$c = new ClientController;
echo '<pre>'; print_r($c->show(1)).exit;