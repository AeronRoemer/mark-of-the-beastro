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
                <div class="nav">
                    <div class="nav-content">
                    <div class="header-img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/mark-of.png" class="header-img"/>
                    </div>
                        <div class="nav-links">
                            <a href="<?php echo get_home_url(); ?>/menu">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/menu-link.png" alt="Menu" class="nav-link"/>
                            </a>
                            <a href="https://my-site-102247-105906.square.site/" target="blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/order-link.png" alt="Order"class="nav-link"/>
                            </a>
                            <a href="<?php echo get_home_url(); ?>/about">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/about-link.png" alt="About" class="nav-link"/>
                            </a>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/markofthebeastro/" target="blank">    
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/insta-icon.png" alt="Instagram Icon"class="social-icon"/>
                            </a>
                            <a href="https://www.facebook.com/Markofthebeastro/" target="blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/fb-icon.png" alt="Facebook Icon" class="social-icon"/>
                            </a>
                        </div>
                    </div>
            </div> 
        
