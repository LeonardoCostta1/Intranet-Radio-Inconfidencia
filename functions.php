<?php

//WIDGETS

if(function_exists('register_sidebar'))
{
    register_sidebar(array(
    ));
}
add_theme_support('post_thumbnails');

// Desativar Admin Bar para todos os usuários exceto para administradores:
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
//Remove Admin Bar para todos os usuário
show_admin_bar(false);
?>