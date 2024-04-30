<?php
    namespace Sts\Controllers;

    if(!defined('C7E3L8K9ES')){
        header('Location: /');
        die('Erro : Página não encontrada! <br>');
      }
    /**
     * Carregar a pagina da View
     * @author Evertton <everton.carlospv@gmail.com>
     */
    class SobreEmpresa{
          /** Receber o endereço da View e os dados
         * @var array |string|null $data recebe os dados que  devem ser enviados para View 
        */
        private array|string|null $data;
        
        public function index(){
            $this->data = [];
            $loadView = new \Core\ConfigView("sts/Views/SobreEmpresa/sobreEmpresa", $this->data);
            $loadView->loadView();
            echo "Pagina da empresa";
        }
    }