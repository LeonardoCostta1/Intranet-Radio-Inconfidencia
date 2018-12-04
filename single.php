<!DOCTYPE html>
<html>
    <head>
        <title>EMC</title>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta name="robots" content="index, follow" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
         <link href="<?php bloginfo ('template_url') ?>/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url') ?>/css/datatables.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url') ?>/css/skippr.css"/>
        <script type="text/javascript" src="<?php bloginfo ('template_url') ?>/js/datatables.js"></script>
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/jquery.mCustomScrollbar.css" />
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/owl.theme.default.css" />

    </head>

    <body id="inicio">
        
        <div class="chamado"><span class="ion-plus"></span>
        <div class="loading"></div>
        </div>
        <div class="inicio"></div>
       <div class="top-bar"></div>
       <div class="nav">
           <div class="row">
               
               <div class="col-md-3">
                  <a href="<?php bloginfo('home')?>"> <div class="logo" id="home">In<span class="txt-logo"> Inconfidencia</span></div></a>
               
               </div>
                   
               <div class="col-md-7">
              
        <ul>
<!--            <li class="dep"><a class="scroll" href="#">depertamentos</a></li>-->
            <li><a href="<?php bloginfo('home')?> ">inicio</a></li>
            <li><a href="<?php bloginfo('home')?> ">escalas</a></li>
            <li><a href="<?php bloginfo('home')?> ">informativos</a></li>
            <li><a href="<?php bloginfo('home')?> ">ramais</a></li>
            <li><a href="<?php bloginfo('home')?> ">Aniversariantes</a></li>
                <?php wp_list_pages('title_li');?>
            <li><a href="<?php bloginfo('home')?> ">Sorteio</a></li>
        </ul>
               
               </div>
               
               <div class="col-md-2">
                   <div class="login"><a href="#"><span class="ion-ios-locked-outline"></span>&nbsp; login</a></div>
               
               </div>
               </div>
        
        </div>
        
        <div class="img-page">
        
        <div class="img-slide-page" style="background-image: url(<?php bloginfo ('template_url') ?>/img/music.jpeg)">
         <div class="blur-black">
        
        </div>
            </div>
        </div>
        
        <div class="content-page">        
        <?php
            if( get_post_type() == 'shopping' ): // Se o post type foi shopping
                get_template_part('single','shopping'); // Vai carregar o arquivo single-shopping.php
            endif;

            if( get_post_type() == 'post' ): // Se o post type foi post
                get_template_part('single','padrao'); // Vai carregar o arquivo single-padrao.php
            endif;
        ?>
        
        </div>
       

        <div class="footer">
            
            <div class="text-footer">
                <img src="<?php bloginfo ('template_url') ?>/img/logo-rodape.png">
            
            <div class="end-footer">Rua Tenente Brito Melo, 1090 - Bloco I - 2º e 3º andares | Barro Preto | CEP: 30180-074 | Belo Horizonte - MG</div>
            <div class="direitos-footer">Intranet Rádio Inconfidência | Todos os direitos reservados</div>

             </div>   

        
        </div>
        

            
    
      
        
        

    <script src="<?php bloginfo ('template_url') ?>/js/jquery-1.12.0.js" type="text/javascript"></script>
    <script src="<?php bloginfo ('template_url') ?>/js/bpopup.js" type="text/javascript"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>-->
    <script src="<?php bloginfo ('template_url') ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo ('template_url') ?>/js/script.js" type="text/javascript"></script>
    <script src="<?php bloginfo ('template_url') ?>/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo ('template_url') ?>/js/skippr.js"></script>
    <script src="<?php bloginfo ('template_url') ?>/js/jquery.mCustomScrollbar.js"></script>
    <script src="<?php bloginfo ('template_url') ?>/js/owl.carousel.min.js"></script>
    </body>
</html>

