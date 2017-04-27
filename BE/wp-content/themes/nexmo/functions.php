<?php
define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));
//add_image_size( 'thumb-service',225,230,true);

add_theme_support('post-thumbnails',array('post', 'clients', 'blog'));

//paging ajax for homeland
include 'inc/paging.php';

//Change label for post
include 'inc/change_label_post.php';

//register menu
function register_menu() {
    register_nav_menus( array(
    	'menu_products' => 'Products - Menu',
    	'menu_docs' => 'Document - Menu',
        'menu_usecases' => 'UseCases - Menu',
    ) );
    register_nav_menu('menu_products',__( 'menu_products' ));
    register_nav_menu('menu_docs',__( 'menu_docs' ));
    register_nav_menu('menu_usecases',__( 'menu_usecases' ));
}
add_action( 'init', 'register_menu' );


if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
    'page_title'  => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-general-settings'
   ));

     acf_add_options_sub_page(array(
      'page_title'  => 'Header',
      'menu_title' => 'Header',
      'parent_slug' => 'theme-general-settings',
     ));
   acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title' => 'Footer',
    'parent_slug' => 'theme-general-settings',
     ));
}
