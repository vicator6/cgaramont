<?php
// Ajouter les images à la une sur les articles
add_theme_support( 'post-thumbnails' );

// Ajouter un menu - Dupliquer la ligne pour ajouter d'autres menus
register_nav_menu('principal', 'Menu principal');
register_nav_menu('footer', 'Menu footer');

// Créer des Custom Post Type
add_action( 'init', 'create_post_type' );
function create_post_type() {
    // Dupliquer le register_post_type pour ajouter d'autres CPT
    register_post_type('service',
        array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('projet',
        array(
            'labels' => array(
                'name' => 'Projets',
                'singular_name' => 'Projet'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}
