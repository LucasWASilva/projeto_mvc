<?php

use \App\Http\Response;
use \App\Controller\Pages;

// Rota HOME
$obRouter->get('/', [
    function()
    {
        return new Response(200, Pages\Home::getHome());
    } 
]);

// Rota ABOUT
$obRouter->get('/sobre', [
    function()
    {
        return new Response(200, Pages\About::getAbout());
    }
]);

// Rota DINÂMICA
$obRouter->get('/pagina/{idPagina}/{acao}', [
    function($idPagina, $acao)
    {
        return new Response(200, 'Página '.$idPagina.' - '.$acao);
    }
]);