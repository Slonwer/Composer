<?php

namespace Core;

if(!defined('C7E3L8K9ES')){
    header('Location: /');
    die('Erro : Página não encontrada! <br>');
  }

/**
 * Recebe a URL e manipula
 * Carregar a CONTROLLER
 * 
 * @author RRSECCO <everton.carlospv@gmail.com>
 */
class ConfigController extends Config {
    
    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;

    public function __construct() {
        $this->config();
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->clearUrl();
            $this->urlArray = explode("/", $this->url);

            if(isset($this->urlArray[0])){
                $this->urlController = $this->slugController($this->urlArray[0]);
            }else{
                $this->urlController = $this->slugController(CONTROLLERERRO);
            }
        }else{
            $this->urlController = $this->slugController(CONTROLLER);
        }
        //echo "Controller: {$this->urlController}<br>";
    }

    
    private function clearUrl() : void {
       
        $this->url = strip_tags($this->url);
       
        $this->url = trim($this->url);
        
        $this->url = rtrim($this->url, "/");
        
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }

    private function slugController($slugController) {
        
        $this->urlSlugController = strtolower($slugController);
        
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        
        $this->urlSlugController = ucwords($this->urlSlugController);
      
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }

    public function loadPage() : void {
        $classLoad = "\\Sts\\Controllers\\". $this->urlController;
        $classPage = new $classLoad();
        $classPage->index();
    }
}