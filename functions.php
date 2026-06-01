<?php
// Theme Supports
add_theme_support('post-thumbnails');
add_image_size('portfolio-thumb', 750, 500, true);
add_theme_support('align-wide');

// Habilitar Options Page do ACF
add_action('acf/init', function() {
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Dados Gerais',
        'menu_title'    => 'Dados Gerais',
        'menu_slug'     => 'dados-gerais',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Redes Sociais',
        'menu_title'    => 'Redes Sociais',
        'parent_slug'   => 'dados-gerais',
    ));
  }

});

?>