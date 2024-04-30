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
    class Home {
         /** Receber o endereço da View e os dados
         * @var array |string|null $data recebe os dados que  devem ser enviados para View 
        */
        private array|string|null $data;
        /**
         * Intanciar a classe responsalvel em carregar a view
         * @return void
         */

        public function index() : void {
            $home = new \Sts\Models\StsHome();
            $this->data = $home->index();//esta vindo da Model 
            
            $loadView = new \Core\ConfigView("sts/Views/home/home", $this->data);
            $loadView->loadView();
        }
    }