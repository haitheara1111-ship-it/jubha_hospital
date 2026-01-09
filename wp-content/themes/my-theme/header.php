<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">


        <div class="site-logo">
            <img src="http://jubha_hospital.test/wp-content/uploads/2026/01/logo-hospital-rm-bg.png" alt="">
            <a href="<?php echo esc_url(home_url('/')); ?>">
             
            </a>
        </div>

        
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'main-menu',
                'container'      => false,
            ));
            ?>
        </nav>

        <div class="header-actions">
           

            <a href="/book-appointment" class="btn-appointment">
                Book an Appointment
            </a>

            <a href="/my-account" class="icon-btn">
                <span class="dashicons dashicons-admin-users"></span>
            </a>

            <a href="#" class="icon-btn search-toggle">
                <span class="dashicons dashicons-search"></span>
            </a>
        </div>

    </div>
</header>

<main class="site-content">