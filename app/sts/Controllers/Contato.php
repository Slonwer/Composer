<?php
    namespace Sts\Controllers;
    
    if(!defined('C7E3L8K9ES')){
      header('Location: /');
      die('Erro : Página não encontrada! <br>');
    }
     /**
     * Carregar a pagina da View
     * @author Everton <everton.carlospv@gmail.com>
     */

    class Contato{
         /** Receber o endereço da View e os dados
         * @var array |string|null $data recebe os dados que  devem ser enviados para View 
        */
        private array|string|null $data;

        public function index(){
          $this->data= null;
          $loadView = new \Core\ConfigView("Sts/Views/contato/contato", $this->data);
          $loadView->loadView();
        }
    }