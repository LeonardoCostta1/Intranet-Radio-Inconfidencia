<!--HEADER-->
<?php get_header(); ?>
    <div class="slide">
        <?php echo do_shortcode('[smartslider3 slider=2]');?>
    </div>
    <div class="nav-bottom" id="escala" >
        <div class="txt-listas"  >
            Verifique a lista de seu interesse
        </div>
        
        </div>
        <div class="nav-opcoes"  >
            <ul>
                <!-- <li><div class="box-list"><span class="ion-ios-football-outline"><div class="title-box">Esporte</div></span></div></li> -->
                <li><div class="box-list"><span class="ion-ios-paper-outline"><div class="title-box">folhas de ponto</div></span></div></li>
                <!-- <li><div class="box-list"><span class="ion-ios-speedometer-outline"> <div class="title-box">Motoristas</div></span></div></li> -->
                <!-- <li><div class="box-list"><span class="ion-ios-mic-outline"><div class="title-box">Operadores</div></span></div></li> -->
                <li><div class="box-list"><span class="ion-ios-settings"><div class="title-box">Tutoriais</div></span></div></li>
            </ul>
        </div>
        
        <div id="tutoriais"></div>
        <div id="folha-ponto">
        
            <div class="titulo-pop-padrao">Folhas De Ponto</div>
            <div class="row">
                
<!--                FOLHAS DE PONTO ESTAGIARIO -->
                
                    <div class="col-md-3">
                    <iframe src="<?php bloginfo ('template_url') ?>/docs/folha_de_ponto.pdf" width="100%" height="300" style="border: none;"></iframe>
                    
                    <?php query_posts('category_name=folha-de-ponto-estagiario-mes-passado&offset=0&showposts=1');?>
                    <?php if (have_posts()): while(have_posts()) : the_post(); ?>
                    
                    <div class="texto-padrao-folha-ponto"><?php the_title();?></div>
                    <div class="btn-visualizar-ponto">
                    <?php the_content();?>
                    </div>

                    <?php endwhile; else: ?>
                    <?php endif; ?>
                </div> 
                
     
                
                <div class="col-md-3">
                    <iframe src="<?php bloginfo ('template_url') ?>/docs/folha_de_ponto.pdf" width="100%" height="300" style="border: none;"></iframe>
                    
                    <?php query_posts('category_name=mes_atual_estagiario&offset=0&showposts=1');?>
                    <?php if (have_posts()): while(have_posts()) : the_post(); ?>
                    
                    <div class="texto-padrao-folha-ponto"><?php the_title();?></div>
                    <div class="btn-visualizar-ponto">
                    <?php the_content();?>
                    </div>

                    <?php endwhile; else: ?>
                    <?php endif; ?>
                </div> 
                
<!--                FOLHAS DE PONTO FUNCIONARIOS-->

                <div class="col-md-3">
                    <iframe src="<?php bloginfo ('template_url') ?>/docs/folha_de_ponto.pdf" width="100%" height="300" style="border: none;"></iframe>
                    
                    <?php query_posts('category_name=mes-anterior-funcionario&offset=0&showposts=1');?>
                    <?php if (have_posts()): while(have_posts()) : the_post(); ?>
                    
                    <div class="texto-padrao-folha-ponto"><?php the_title();?></div>
                    <div class="btn-visualizar-ponto">
                    <?php the_content();?>
                    </div>

                    <?php endwhile; else: ?>
                    <?php endif; ?>
                </div> 
 
          <div class="col-md-3">
                    <iframe src="<?php bloginfo ('template_url') ?>/docs/folha_de_ponto.pdf" width="100%" height="300" style="border: none;"></iframe>
                    
                    <?php query_posts('category_name=mes-atual-funcionario&offset=0&showposts=1');?>
                    <?php if (have_posts()): while(have_posts()) : the_post(); ?>
                    
                    <div class="texto-padrao-folha-ponto"><?php the_title();?></div>
                    <div class="btn-visualizar-ponto">
                    <?php the_content();?>
                    </div>

                    <?php endwhile; else: ?>
                    <?php endif; ?>
                </div> 
               
     
            </div>

        
        </div>
        <div id="esporte-escala"></div>
        <div id="motorista-escala"></div>
        <div id="operadores-escala"></div>
 <div class="back-title" id="informativos">
                    <div class="title-pg">
                        <span class="color-title">Informativos</span> Inconfidência
                    </div>
                </div>

            <div class="informacoes">
                <div class="row">
                    <div class="informacoes-all">
                <div class="col-md-3">
                    <div class="box-informacoes">
                        <div class="ball">
                            <ion-icon class="icon-ion" name="paper"></ion-icon>
                        </div>

                    <?php $institucional = new WP_Query( 'page_id=293' ); ?>
                    <?php if( $institucional->have_posts() ) : $institucional->the_post(); ?>
                    <div class="title-informacoes">Institucional</div>
                        <div class="content-informacoes">
                        <?php the_excerpt();?>
                        </div>
                    <?php endif; ?>   
                        <div class="author-informacoes">
                            <ion-icon class="user" name="person"></ion-icon>
                            <?php the_author(); ?>
                            <div class="data">
                            </div>
                        </div>
                        <a href="<?php echo get_page_link(293); ?>"><button>ler mais</button> </a>
                    </div>
                </div>
                        
                
                <div class="col-md-3">
                    <div class="box-informacoes">
                        <div class="ball">
                            <ion-icon class="icon-ion" name="paper"></ion-icon>
                        </div>


                    <?php $rh = new WP_Query( 'page_id=296' ); ?>
                    <?php if( $rh->have_posts() ) : $rh->the_post(); ?>
                    <div class="title-informacoes">RH</div>
                        <div class="content-informacoes">
                        <?php the_excerpt();?>
                        </div>
                    <?php endif; ?>    
                    <div class="author-informacoes">
                            <ion-icon class="user" name="person"></ion-icon>
                            <?php the_author(); ?>
                            <div class="data">
                            </div>
                        </div>
                        <a href="<?php echo get_page_link(296); ?>"><button>ler mais</button> </a>
                    </div>
                </div>  
                        
                <div class="col-md-3">
                    <div class="box-informacoes">
                        <div class="ball">
                            <ion-icon class="icon-ion" name="paper"></ion-icon>
                        </div>
                        <?php $logistica = new WP_Query( 'page_id=298' ); ?>
                        <?php if( $logistica->have_posts() ) : $logistica->the_post(); ?>
                            <div class="title-informacoes">Logistica</div>
                                <div class="content-informacoes">
                                <?php the_excerpt();?>
                                </div>
                          
                            <?php endif; ?>    
                            <div class="author-informacoes">
                            <ion-icon class="user" name="person"></ion-icon>
                            <?php the_author(); ?>
                            <div class="data">
                            </div>
                        </div>
                        <a href="<?php echo get_page_link(298); ?>"><button>ler mais</button> </a>
                    </div>
                </div> 
                        
                <div class="col-md-3">
                    <div class="box-informacoes">
                        <div class="ball">
                            <ion-icon class="icon-ion" name="paper"></ion-icon>
                        </div>
                        <?php $logistica = new WP_Query( 'page_id=301' ); ?>
                        <?php if( $logistica->have_posts() ) : $logistica->the_post(); ?>
                            <div class="title-informacoes">Secretaria</div>
                                <div class="content-informacoes">
                                <?php the_excerpt();?>
                                </div>
                            <?php endif; ?>    
                            <div class="author-informacoes">
                            <ion-icon class="user" name="person"></ion-icon>
                            <?php the_author(); ?>
                            <div class="data">
                            </div>
                        </div>
                        <a href="<?php echo get_page_link(301); ?>"><button>ler mais</button> </a>
                    </div>
                </div>          
                </div>
            </div>
        </div>
        
        
        <div class="redes-sociais">
            <!-- <div class="blur-black-social"> -->
            <div class="itens-redes-sociais">
                <ul>
                    <a href="http://www.facebook.com/radioinconfidencia" target="_blank"><li class="redes"><span class="ion-social-facebook"> facebook</span></li></a>
                     <a href="https://twitter.com/inconfidenciafm" target="_blank"><li class="redes"><span class="ion-social-twitter"> twitter fm</span></li></a>
                    <a href="https://twitter.com/inconfidenciaam" target="_blank"><li class="redes"><span class="ion-social-twitter"> twitter am</span></li></a>
                    <a href="http://instagram.com/radioinconfidencia" target="_blank"><li class="redes"><span class="ion-social-instagram"> Instagram</span></li></a>
                    <a href="https://plus.google.com/u/0/104732979823812135203/posts" target="_blank"><li class="redes"><span class="ion-social-googleplus"> Google +</span></li></a>
                </ul>
            </div>
        </div>
        
          <div class="back-title" >
            <div class="title-pg" >
                <span class="color-title"id="ramais">Ramais</span> Inconfidência
                
            </div>
            </div>
    <div class="ramais" >
    <div class="ramal-content" >
    <div class="tabela-ramal">
    <div class="ramal-wrapper">
        <?php echo do_shortcode('[table id=1 /]');?>
    </div>
</div>
</div> 
</div>            

<?php get_footer(); ?>
       
       