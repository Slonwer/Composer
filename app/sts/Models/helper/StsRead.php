<?php

    namespace Sts\Models\helper;

     //redirenciona ou para o processamento quando o usuario nao acessa o arquivo index.php
 if(!defined('C7E3L8K9ES')){
    header('Location: /');
    die('Erro : Página não encontrada! <br>');
  }

  use PDO;
  use PDOException;

  /**
   * Helper responsavel em busca os registro no banco de dados
   * @author Everton
   */

   class StsRead extends StsConn{

    private string $select;

    private array|null $result = [];

    private object $query;

    private object $conn;

    function getResult(): array|null {
        return $this->result;
    }
   }