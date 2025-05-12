<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="top-bar">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/top-bar.svg'); ?>" alt="<?php bloginfo('name'); ?>" class="logo">

    </div>
    <nav class="header-nav container">
        <div>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.svg'); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        
        
        
        <?php wp_nav_menu(['theme_location' => 'main_menu']); ?></nav>
</header>
