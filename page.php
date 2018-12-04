<!DOCTYPE html>
<html <?php language_attributes() ?> >
<?php get_header(); ?>

    <body id="inicio">
        
        <div class="chamado"><span class="ion-plus"></span>
        <div class="loading"></div>
        </div>
        <div class="inicio"></div>
        
        <div class="content-page">
        <div class="back-title_page">
            <div class="title-pg">
                <span class="color-title"><?php the_title(); ?></span> Inconfidencia
                <div class="line-base"></div>
            </div>
            </div>
        
        <div class="content-page-all">
            <?php if (have_posts()): while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>        
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>
       </div>

    <?php get_footer(); ?>            
    