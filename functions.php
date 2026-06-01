<?php
// Theme Supports
add_theme_support('post-thumbnails');
add_image_size('portfolio-thumb', 750, 500, true);
add_theme_support('align-wide');

function register_my_menus() {
  register_nav_menus(
    array(
      'desktop-menu' => __( 'Desktop Menu' ),
      'mobile-menu' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Carregando Estilos e Javascript

function add_theme_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri() );
  wp_enqueue_script('fonts', 'https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:400,400i,700,700i,800,800i&display=swap
', array(), null, 'all');
  wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), null, 'all');
  wp_enqueue_style('guttenberg', get_template_directory_uri() . '/css/gutenberg-blocks.css', array(), null, 'all');
	  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.min.css', array('bootstrap','gutenberg','fonts'), null, 'all');

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

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