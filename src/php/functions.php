<?php
//callback function

function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/<%=htmlWebpackPlugin.files.chunks.main.css %>', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/<%=htmlWebpackPlugin.files.chunks.main.entry %>', array(), null, false );
}
add_theme_support( 'post-thumbnails' );
//HOOK
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' ); 

function register_my_menus() { 
    register_nav_menus( 
        array(       
            'main-menu' => __( 'Main Menu' ),       
            'extra-menu' => __( 'Extra Menu' )      
            )    
        );  
    } 
    add_action( 'init', 'register_my_menus' );
    
    function wcr_remove_intermediate_image_sizes($sizes, $metadata) {
        $disabled_sizes = array(
            'thumbnail', // 150x150 image
            'medium', // max 300x300 image
            'large'   // max 1024x1024 image
        );
    
        // unset disabled sizes
        foreach ($disabled_sizes as $size) {
            if (!isset($sizes[$size])) {
                continue;
            }
        
            unset($sizes[$size]);
        }
    
        return $sizes;
    }
    
    add_filter('intermediate_image_sizes_advanced', 'wcr_remove_intermediate_image_sizes', 10, 2);    
    function remove_the_wpautop_function() {
        remove_filter( 'the_content', 'wpautop' );
        remove_filter( 'the_excerpt', 'wpautop' );
    }
    
    add_action( 'after_setup_theme', 'remove_the_wpautop_function' );
?>
