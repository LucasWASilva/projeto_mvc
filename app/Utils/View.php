<?php

namespace App\Utils;

class View
{
    /**
     * Variáveis padrões da View
     * @var array
     */
    private static $vars = [];

    /**
     * Método responsável por definir os dados iniciais da classe
     * @param array $vars
     */
    public static function init($vars = [])
    {
        self::$vars = $vars;
    }

    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        // file_exists($file) -> verifica se o arquivo existe
        // file_get_contents -> se existir ele pega o conteudo do arquivo
        // '' -> do contrário ele deixa vazio
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo redenrizado de uma view
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string
     */
    public static function render($view, $vars = [])
    {
        // Conteúdo da view
        $contentView = self::getContentView($view);
        // Merge de variáveis da view
        $vars = array_merge(self::$vars, $vars);
        // Chaves do array de variáveis
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{' . $item . '}}';
        }, $keys);
        // returna o conteúdo renderizado
        return str_replace($keys, array_values($vars), $contentView);
    }

}