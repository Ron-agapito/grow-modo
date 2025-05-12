<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
});

// Disable Gutenberg for all post types
add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable block editor for widgets (optional)
add_filter('use_widgets_block_editor', '__return_false');

function growmodo_register_menus() {
    register_nav_menus(
        array(
            'main_menu' => __('Main Menu', 'growmodo'),
        )
    );
}
add_action('after_setup_theme', 'growmodo_register_menus');

function growmodo_add_google_fonts() {
    wp_enqueue_style(
        'urbanist-font',
        'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'growmodo_add_google_fonts');

function enable_svg_uploads($mimes) {
    // Add SVG to allowed mime types
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'enable_svg_uploads');


//add custom post type service
function create_service_post_type() {
    register_post_type('service',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'services'),
        )
    );
}
add_action('init', 'create_service_post_type');

//member post type
function create_member_post_type() {
    register_post_type('member',
        array(
            'labels' => array(
                'name' => __('Members'),
                'singular_name' => __('Member')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'members'),
        )
    );
}
add_action('init', 'create_member_post_type');
