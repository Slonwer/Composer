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

    class Erro{
       /** Receber o endereço da View e os dados
         * @var array |string|null $dados recebe os dados que  devem ser enviados para View 
        */
        private array|string|null $data;

        public function index(){
            $this->data=[];
          $loadView = new \Core\ConfigView("Sts/Views/erro/erro", $this->data);
          $loadView->loadView();
            echo "Erro na pagina";
        }
    }