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
    <?php
        // check to see if the logo exists and add it to the page
        if ( get_theme_mod( 'bg-img' ) ) : ?>
        <div class="background-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)),
            url('<?php echo get_theme_mod( 'bg-img' ); ?>'); ">
        </div>
        <?php endif; ?>
    <div id="page">
            <header id="masthead" class="header-container" role="banner">
                    <a href="#content" class="skip-link screen-reader-text" display="none">
                        <?php esc_html_e( 'Skip to content', 'beastro' ); ?> 
                    </a>
                <div class="nav">
                    <div class="nav-content">
                        <div class="site-branding">
                            <p class="site-description">
                                <?php bloginfo( 'description' ); ?>
                            </p>
                        </div>
                        <div class="custom-info">
                            <div class="header-hours">
                                <?php echo get_theme_mod('hours'); ?>
                            </div>
                            <div class="header-phone">
                                <?php echo get_theme_mod('phone'); ?>
                            </div>
                            <div class="header-location">
                                <?php echo get_theme_mod('location'); ?>
                            </div>
                        </div>
                        <div class="nav-links">
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/menu-link.png" class="nav-link"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/order-link.png" class="nav-link"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/about-link.png" class="nav-link"/>
                        </div>
                        <div class="social-icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/insta-icon.png" class="social-icon"/>
                            <a href="https://www.facebook.com/Markofthebeastro/" target="blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/fb-icon.png" class="social-icon"/>
                            </a>
                        </div>
                    </div>
            </div> 
            <div class="header-container">
                <div class="beast-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/beast.png" class="beast"/>
                </div>
                <div class="text-header">        
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/mark-of.png" class="mark-of">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/vegan-diner.png" class="vegan-diner"/>
                </div>
                </div>
        </header>
            <div id="content" class="site-content">
        
