<?php

//redirenciona ou para o processamento quando o usuario nao acessa o arquivo index.php
if(!defined('C7E3L8K9ES')){
    header('Location: /');
    die('Erro : Página não encontrada! <br>');
  }
   /**
   * Carregar a pagina da View
   * @author Everton <everton.carlospv@gmail.com>
   */
    echo "View da pagina home do SITE <br>";

    extract($this->data);
    echo"ID: $id <br>";
    echo"Titulo: $title_top <br> ";
    echo"Descrição: $description_top <br>";
    echo"Link do botao: $link_btn_top <br>";
    echo"Texto do botao: $txt_btn_top <br>";
    echo"Nome da imagem: $image <br>";


    //var_dump($this->data);

    //Testa o acesso ao arquivo
    //http://localhost/siteaula/app/sts/Views/home/home.php

    //Testa o acesso ao arquivo
    //http://localhost/siteaula/app/sts/

    //Testa o acesso ao arquivo