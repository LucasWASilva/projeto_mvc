<?php

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

class Home extends Page
{
    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     * @return string
     */
    public static function getHome()
    {
        // Organização
        $objOrganization = new Organization; 

        $content = View::render('pages/home', [
            'name' => $objOrganization->name
        ]);

        return parent::getPage('HOME > JWE', $content);
    }
}