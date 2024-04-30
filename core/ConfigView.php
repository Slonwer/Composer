<?php
    namespace Core;

    if(!defined('C7E3L8K9ES')){
        header('Location: /');
        die('Erro : Página não encontrada! <br>');
      }
    /**carregar as pagina da View 
     * @author Gabriel <ioserro53@gmail.com>
    */
    class ConfigView{
        /** Receber o endereço da View e os dados
         * @param string $nameView endereço da VIEW que deve ser carregada
         * @param array |string|null $data dados que a view deve receber
        */
        public function __construct(private string $nameView, private array|string|null $data){
            //php 8 
        }
        /**
         * carrega View.
         * verificar se o arquivo existe, e carregar caso, nao existe para o carregamento
         * @return void
         */
        public function loadView() : void {
            if(file_exists('app/'. $this->nameView . '.php')){
                include 'app/'. $this->nameView . '.php';
            }else{
                die("Erro: Por Favor tente novamento. Caso o problema persista,
                entre em contato o administrado". EMAILADM);
            }
        }

    }