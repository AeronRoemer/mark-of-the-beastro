<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?> 
        <!-- allows links to stylesheets etc -->
    </head>
    <body <?php body_class(); ?>>
    <header class="header-container">
        <div class="header">
            HEADER
        </div>   
        <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php
            wp_nav_menu( [
                'theme_location' => 'main-menu'
            ] )
        ?>
        </nav>   
    </header>
