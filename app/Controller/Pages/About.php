<?php

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

class About extends Page
{
    /**
     * Método responsável por retornar o conteúdo (view) da nossa página Sobre
     * @return string
     */
    public static function getAbout()
    {
        // Organização
        $objOrganization = new Organization; 

        $content = View::render('pages/about', [
            'name' => $objOrganization->name,
            'description' => $objOrganization->description,
            'site' => $objOrganization->site
        ]);

        return parent::getPage('SOBRE > JWE', $content);
    }
}