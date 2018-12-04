<!DOCTYPE html>
<html <?php language_attributes() ?> >
    <head>
        <title><?php wp_title('-',true,'right');bloginfo() ?></title>
        <meta charset="<?php bloginfo('charset') ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta name="robots" content="index, follow" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
         <link href="<?php bloginfo ('template_url') ?>/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url') ?>/css/datatables.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url') ?>/css/page.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url') ?>/css/skippr.css"/>
        <script type="text/javascript" src="<?php bloginfo ('template_url') ?>/js/datatables.js"></script>
        <script type="text/javascript" src="<?php bloginfo ('template_url') ?>/js/print.min.js"></script>
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/jquery.mCustomScrollbar.css" />
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/owl.theme.default.css" />
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/print.min.css" />
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/https://use.fontawesome.com/releases/v5.2.0/css/all.css"  integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
        <script src="<?php bloginfo ('template_url') ?>/https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
        <script src="<?php bloginfo ('template_url') ?>/js/jquery-1.12.0.js" type="text/javascript"></script>
        <script src="<?php bloginfo ('template_url') ?>/js/script.js" type="text/javascript"></script>
    
        <link rel="stylesheet" href="<?php bloginfo ('template_url') ?>/css/font-awesome.css">
        
        <?php wp_head();?>


    </head>

    <script>

    </script>
    <body id="inicio">
        
        <div class="chamado"><span class="ion-plus"></span>
        <div class="loading"></div>
        <div class="info-chamado">Deseja Abrir um Chamado?</div>
        </div>
        <div class="inicio"></div>
       <div class="top-bar">
           <ul>
               <li><i class="fab fa-facebook-f"></i></li>
               <li><i class="fab fa-twitter"></i></li>
               <li><i class="fab fa-twitter"></i></li>
               <li><i class="fab fa-instagram"></i></li>
               <li><i class="fab fa-youtube"></i></li>
           </ul>
        </div>
       <div class="nav">
           <div class="row">
               
               <div class="col-md-3">
                    <!-- <a href="<?php bloginfo('home')?>"> <div class="logo" id="home">In<span class="txt-logo">Inconfidência</span></div></a> -->
                    <a href="<?php bloginfo('home')?>"> <div class="logo" id="home"><img src="<?php bloginfo('template_url')?>/img/logo.png" width='70'></div></a>
               
               </div>    
            <div class="col-md-6 nav-t" > 
                <ul >
                    <li><a class="scroll" href="#inicio">inicio</a></li>
                    <!-- <li><a class="scroll" href="#escala">escalas</a></li> -->
                    <li><a class="scroll" href="#informativos">informativos</a></li>
                    <li><a class="scroll" href="#ramais">ramais</a></li>
                    <a href="<?php echo get_page_link(265); ?>"><li>aniversariantes</li></a>
                    
                </ul>
            </div>

               <div class="col-md-3">
                   <div class="login"><a href="http://localhost/wordpress/wp-login.php"><span class="ion-ios-locked-outline"></span>&nbsp; login</a></div>
               
               </div>
               </div>
        
        </div>