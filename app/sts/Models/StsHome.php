<?php
 namespace Sts\Models;
 //redirenciona ou para o processamento quando o usuario nao acessa o arquivo index.php
 if(!defined('C7E3L8K9ES')){
    header('Location: /');
    die('Erro : Página não encontrada! <br>');
  }
   /**
   * Models responsavel em buscas os dados da pagina home
   * @author Everton <everton.carlospv@gmail.com>
   */

 class StsHome {
    /** @var array $dados recebe os registro do banco de dados  */

    private array $data;

    /**
     * @var object $connection Recebe a conexao do banco de daos
     */
    private object $connection;

    /** possui a query responsavel em busca registro no BD
     *  @return array retorna informações para pagina home
    */

    public function index(): array{
        /*$this->data=[
            "Title" => "Topo da página",
            "Description" => "Descrição do serviço"
        ];*/
        $connection = new \Sts\Models\helper\StsConn();
        $this->connection = $connection->connectDb();
        $query_home_top = "SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_tops LIMIT 1";
        $result_home_top = $this->connection->prepare($query_home_top);
        $result_home_top->execute();
        $this->data = $result_home_top->fetch();

        var_dump($this->data);
        
        return $this->data;
    }

 }