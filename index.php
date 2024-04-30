
    <?php
    //Constante que define que o usuario esta acessando paginas internas atraves da pagina index.php
    define('C7E3L8K9ES', true);

        //Carregar o composer
        require './vendor/autoload.php';
       //Instanciar a classe ConfigController, responsavel em tratar a  Url
        $url = new Core\ConfigController();
        //Instanciar o metodo para carregar a pagina/controler
        $url->loadPage();

        //http://localhost/siteaula/app/sts/Views/home/home.php
    
    ?>
