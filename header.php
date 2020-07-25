<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?> 
        <!-- allows links to stylesheets etc -->
    </head>
    <body <?php body_class(); ?>>
    <div id="page">
        <header id="masthead" class="header-container" role="banner">
            <a href="#content" class="skip-link screen-reader-text" display="none">
                <?php esc_html_e( 'Skip to content', 'beastro' ); ?> 
            </a>
            <div class="header">
            <div class="site-branding">
                <p class="site-title">
                    <a href="<?php esc_url( home_url('/')) ;?>" rel="home"></a>
                    <?php bloginfo( 'name' ); ?>
                </p>
                <p class="site-description">
                    <?php bloginfo( 'description' ); ?>
                </p>
            </div>
                <span>Address & Hours </span>
                <span> Phone Number </span>
            </div>   
            <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
                wp_nav_menu( [
                    'theme_location' => 'main-menu'
                ] )
            ?>
            </nav>   
        </header>
        <div id="content" class="site-content">
        
