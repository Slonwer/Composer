<?php
    namespace Core;

    if(!defined('C7E3L8K9ES')){
      header('Location: /');
      die('Erro : Página não encontrada! <br>');
    }
    /**
     * Configurações basicas do site.
     * @author Everton<everton.carlospv@gmail.com>
     */

     abstract class Config {
    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Pagina principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do adminitrador
     * @return void
     */

     protected function config(): void {
        //URL do Projeto
        define('URL', 'http://localhost/siteaula');
        define('URLADM', 'http://localhost/siteaula/adm/');

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');
        
        //credenciais do banco de dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'bd_sw2');
        define('PORT', '3306');
        define ('EMAILADM', 'everton.carlospv@gmail.com');
     }
    }