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
                <input type="checkbox" class="nav-checkbox" id="nav-check">
                    <label for="nav-check" class="nav-button">
                        <div class="nav-line"><img src="<?php echo get_template_directory_uri(); ?>/inc/img/nav-line.png" alt="Expand Navigation Menu"/></div>
                        <div class="nav-line"><img src="<?php echo get_template_directory_uri(); ?>/inc/img/nav-line.png" alt="Expand Navigation Menu"/></div>
                        <div class="nav-line"><img src="<?php echo get_template_directory_uri(); ?>/inc/img/nav-line.png" alt="Expand Navigation Menu"/></div>
                        </label>
                <div class="nav">
                    <div class="nav-content">
                            <a href="<?php echo get_home_url(); ?>/">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/mark-of.png" class="header-img" alt="Mark Of The Beastro Logo Image"/>
                            </a>    
                            <a href="<?php echo get_home_url(); ?>/menu">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/menu-link.png" alt="Menu" class="nav-link"/>
                            </a>
                            <a href="https://my-site-102247-105906.square.site/" >
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/order-link.png" alt="Order"class="nav-link"/>
                            </a>
                            <a href="<?php echo get_home_url(); ?>/about">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/about-link.png" alt="About" class="nav-link"/>
                            </a>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/markofthebeastro/" ><img src="<?php echo get_template_directory_uri(); ?>/inc/img/insta-icon.png" alt="Instagram Icon" class="social-icon" />
                            </a>
                            <a href="https://www.facebook.com/Markofthebeastro/" >
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/fb-icon.png" alt="Facebook Icon" class="social-icon"/>
                            </a>
                        </div>
                    </div>
                    <div class="nav-background">
                        &nbsp;
                    </div>
            </div> 
        
