<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
    $labels = array(
        'name'                => _x( 'Portfolios', 'Post Type General Name', 'hello-elementor-child' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'hello-elementor-child' ),
        'menu_name'           => __( 'Portfolios', 'hello-elementor-child' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'hello-elementor-child' ),
        'all_items'           => __( 'All Portfolios', 'hello-elementor-child' ),
        'view_item'           => __( 'View Portfolio', 'hello-elementor-child' ),
        'add_new_item'        => __( 'Add New Portfolio', 'hello-elementor-child' ),
        'add_new'             => __( 'Add New', 'hello-elementor-child' ),
        'edit_item'           => __( 'Edit Portfolio', 'hello-elementor-child' ),
        'update_item'         => __( 'Update Portfolio', 'hello-elementor-child' ),
        'search_items'        => __( 'Search Portfolio', 'hello-elementor-child' ),
        'not_found'           => __( 'Not Found', 'hello-elementor-child' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'hello-elementor-child' ),
    );
      
    $args = array(
        'label'               => __( 'portfolio', 'hello-elementor-child' ),
        'description'         => __( 'Portfolio ', 'hello-elementor-child' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
    register_post_type( 'portfolios', $args );
  
}
add_action( 'init', 'custom_post_type', 0 );

