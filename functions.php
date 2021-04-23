<?php

/* Chargement des styles du parent. */

function wpchild_enqueue_styles()
{
    wp_enqueue_style('wpm-hello elementor-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wpchild_enqueue_styles');
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
        wp_enqueue_style( 'chld_thm_cfg_ext1', trailingslashit( get_theme_root_uri() ) . 'hello-child/fonts/icomoon/style.css' );
        wp_enqueue_style( 'chld_thm_cfg_ext2', trailingslashit( get_theme_root_uri() ) . 'hello-child/styles/header.css' );
        wp_enqueue_style( 'chld_thm_cfg_ext3', trailingslashit( get_theme_root_uri() ) . 'hello-child/styles/epigo.css' );
        wp_enqueue_style( 'chld_thm_cfg_ext4', trailingslashit( get_theme_root_uri() ) . 'hello-child/styles/article.css' );
        wp_enqueue_style( 'chld_thm_cfg_ext5', trailingslashit( get_theme_root_uri() ) . 'hello-child/styles/eventbrite.css' );
        wp_enqueue_style( 'chld_thm_cfg_ext6', trailingslashit( get_theme_root_uri() ) . 'hello-child/styles/home.css' );
        wp_enqueue_style( 'chld_thm_cfg_ext7', trailingslashit( get_theme_root_uri() ) . 'hello-child/styles/youtube.css' );
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 999 );

// END ENQUEUE PARENT ACTION


add_theme_support( 'post-thumbnails' );

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );
add_image_size( 'client-thumb', 288, 60, false );

