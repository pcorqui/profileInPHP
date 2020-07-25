<?php

namespace App\Controller;

use Zend\Diactoros\Response\HTMLresponse;

class BaseController{


    protected $templateEngine;
    public function __construct(){

       

        $loader = new \Twig\Loader\FilesystemLoader('../view');
        $this->templateEngine = new \Twig\Environment($loader,array(
            'debug' => true,
            'cache' => false,
        ));

    }

    public function renderHTML($fileName, $data= []){
        return new HtmlResponse($this->templateEngine->render($fileName, $data));
    }
}