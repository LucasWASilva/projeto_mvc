<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{
    /**
    * Método responsável por renderizar a header/topo do template
    * @return string
    */
    private static function getHeader()
    {
        return View::render('pages/header');
    }
    
    /**
    * Método responsável por renderizar o footer/base do template
    * @return string
    */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página genérica
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title' => $title,
            'header' =>  self::getHeader(),
            'content' => $content,
            'footer' =>  self::getFooter()
        ]);
    }
}