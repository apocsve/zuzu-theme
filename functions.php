<?php
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar()
{
    show_admin_bar(false);
}

add_action( 'init', 'register_my_menu' );

function register_my_menu()
{
    register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_li( $classes, $item, $args )
{
    if(isset($args->add_li_class)) 
    {
        $classes[] = $args->add_li_class;
    }

    return $classes;
}

add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

function add_specific_menu_location_atts( $classes, $item, $args ) 
{
    if( $args->menu == 'header-menu' ) 
    {
        if(isset($args->add_a_class)) 
        {
            $classes['class'] = $args->add_a_class;
        }
    }
    
    return $classes;
}

add_action('init', 'custom_post_type_products');

function custom_post_type_products() 
{
    register_post_type(
        'product',
        [
            'labels'      => [
                'name'          => __( 'Productos', 'textdomain' ),
                'singular_name' => __( 'Producto', 'textdomain' ),
            ],
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => [
                'slug' => 'products' 
            ],
        ]
    );
}