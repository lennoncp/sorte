<?php 
    session_start();
    define('wr', 'http://',$_SERVER['SERVER_NAME'].'/');
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="imgs/trevo.png" />
        <title>Sorte Facíl</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <style>
            .borda-preta{
                border: 2px solid #570257;
                height: 90%;
            }

            .borda-cartela{
                /*border: 2px solid #570257;*/
                height: 90%;
            }

            .backg{
                background-color: beige;
            }

            .nuns{
                height: 50px;
                background-color: white;
            }
        </style>
    </head>
    <body>
<?php 

    include("includes/navbar.php");

?>
    <div class="container-flex">
<?php
    
    $url = (isset($_GET['url'])) ? $_GET['url'] : '';
    $explode = explode('/',$url);

    $paginas = array('home', 'aposta', 'contato', 'entrar');

    if(isset($explode[0]) && $explode[0] == '' ){
        include "/contents/home.php";
    }elseif($explode[0] != ''){
        if(isset($explode[0]) && in_array($explode[0], $paginas)){
            include "/contents/".$explode[0].".php";
        }else{
            include "/contents/home.php";
        }
    }

?>  
    </div>
<?php

    include("includes/footer.php");
?>  
    <script src="main.js"></script>

<script src="main.js"></script>

    </body>
</html>