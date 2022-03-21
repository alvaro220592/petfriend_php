<?php

use App\controllers\ClientController;
use App\controllers\TesteController;
use App\views\Footer;
use App\views\Header;

require_once __DIR__ . "/vendor/autoload.php";

// Instanciando a classe Header que chama a view que tem o header
$h = new Header;

echo 'Teste';

// Instanciando a classe footer que chama a view que tem o footer
$f = new Footer;