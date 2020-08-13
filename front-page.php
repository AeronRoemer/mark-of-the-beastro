<!-- Page pulled in for static front page -->
<?php get_header(); ?>

<div class="header-container">
                <div class="beast-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/beast.png" alt="Beast Logo" class="beast"/>
                </div>
                <div class="text-header neon-red">        
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/mark-of.png" alt="Mark Of The Beastro" class="mark-of">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/vegan-diner.png" alt="Vegan Diner" class="vegan-diner"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/add-phone.png" alt="666 S. State St. 385-202-7386" class="add-number"/>
                </div>
                </div>
        </header>

<?php
        // check to see if the background exists and add it to the page
        if ( get_theme_mod( 'bg-img' ) ) : ?>
        <div class="background-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)),
            url('<?php echo get_theme_mod( 'bg-img' ); ?>');
            background-attachment: fixed; ">
        </div>
<?php endif; ?>

<div id="content" class="site-content">
<div id="primary" class="content-area extended">
<main id="main" class="site-main" role="main">

        <?php get_template_part( 'template-parts/alert'); ?>

        <section class="content-container">
        <section id="section-left" class="post">
            <div class="section-post">
                <div class="entry-text">
                <h1 class="entry-title">
                    Menu & Ordering
                </h1>  

                <p>Check out the full menu online, or place an order on the online store. Our in-house delivery service may be able to deliver to you - just choose the 'delivery' option at checkout when avalible. </p>
                <div class="order-buttons">
                    <a href="https://my-site-102247-105906.square.site/" target="blank" class="button-link">
                    ORDER
                    </a>
                    <a href="<?php echo get_home_url(); ?>/menu" class="button-link">  
                    MENU
                    </a>
                </div>
                </div>
                <div class="page-img-container">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/scoot-icon.png" alt="Scooter Icon" class="page-img"/>
                </div>
            </div>
        </section>
        <section id="section-right" class="post">
            <div class="section-post-right">
                <div class="page-img-container-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/inc/img/shake-icon.png" alt="Shake Icon" class="page-img-right"/>
                </div>
                <div class="entry-text-right">
                <a href="<?php echo get_home_url(); ?>/about" class="entry-title" >
                    <h1>
                    About
                    </h1>    
                </a>
                <p>The Mark Of The Beastro blah blah blah <a href="<?php echo get_home_url(); ?>/about" class="button-readmore">  
                    read more &rarr;
                    </a></p>
                <div>
                <br />

                    <div class="header-hours">
                        <?php echo get_theme_mod('hours'); ?>
                    </div>
                    <div class="header-phone">
                        <?php echo get_theme_mod('phone'); ?>
                    </div>
                    <div class="header-location">
                        <?php echo get_theme_mod('location'); ?>
                    </div>
                    <div class="header-location-ext">
                        <?php echo get_theme_mod('location-ext'); ?>
                    </div>
                    markofthebeastro@gmail.com
                </div> 
                </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>
