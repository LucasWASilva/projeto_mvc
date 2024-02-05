<?php

require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

// Constante para URL
define('URL', 'http://localhost/projeto_mvc');

// Define o valor padrão das variáveis
View::init([
    'URL' => URL
]);

// Inicia o Router
$obRouter = new Router(URL);

// Incluir as rotas de páginas
include __DIR__.'/routes/pages.php';

// Imprime o response da rota
$obRouter->run() // vem da classe Router
         ->sendResponse(); //vem da classe Response