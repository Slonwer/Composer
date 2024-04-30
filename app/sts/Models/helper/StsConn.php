<?php

    namespace Sts\Models\helper;

    use PDO;
    use PDOException;

     //redirenciona ou para o processamento quando o usuario nao acessa o arquivo index.php
 if(!defined('C7E3L8K9ES')){
    header('Location: /');
    die('Erro : Página não encontrada! <br>');
  }
   /**
   * Models responsavel em buscas os dados da pagina home
   * @author Everton <everton.carlospv@gmail.com>
   */
   abstract class StsConn {

    /**@var string $host recebe o host da constante HOST*/
    private string $host = HOST;

    /** @var string $user recebe o usuario da constante USER */
    private string $user = USER;

    /** @var string $pass recebe a senha da constante PASS */
    private string $pass = PASS;

    /** @var string $dbname recebe a base de dados da  constante DBNAME*/
    private string $dbname = DBNAME;
    
    /** @var int|string $port recebe a porta da constante PORT*/
    private string $port = PORT;


    /**@var string $connect recebe a conexao com o banco dados */
    private object $connect;

    /**
     * Realizar a conexao com o banco de dados.
     * nao realizando a conexao corretamente , para o processamento da pagina 
     * e apresenta a mensagem de erro, com o email de contato do admintrador
     * @return object retorna a conexao com o banaco de dados
     */

     public function connectDb(): object {
       try {
        //conexao com a porta
        $this->connect = new
          PDO("mysql:host={$this->host};port={$this->port};dbname=".$this->dbname, $this->user, $this->pass);
        
          //conexao sem a porta 
          //$this->connect = new
          //PDO("mysql:host={$this->host};dbname=".$this->dbname, $this->user, $this->pass);

          return $this->connect;
        }catch (PDOException $err){
          die("Erro: Por favor tente novamente. Caso persista , 
          entre em contato o administrador". EMAILADM);
        }
     }
  }