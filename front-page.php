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
            url('<?php echo get_theme_mod( 'bg-img' ); ?>'); ">
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
                <a href="<?php echo get_home_url(); ?>/menu" class="entry-title">
                    <h1 >
                    Menu
                    </h1>    
                </a>
                <p>Check out all our menu items. </p>
                <a href="https://my-site-102247-105906.square.site/" class="entry-title" target="blank">
                    <h1>
                    Order
                    </h1>    
                </a>
                <p>Place an order on our online store. We offer in-house delivery at select times, available as an option in the online store.</p> 
                </div>
                <div class="page-img-container">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/scoot-icon.png" alt="Scooter Icon" class="page-img"/>
                </div>
            </div>
        </section>
        <section id="section-right" class="post">
            <div class="section-post">
                <div class="entry-text-right">
                <a href="<?php echo get_home_url(); ?>/about" class="entry-title" >
                    <h1>
                    About
                    </h1>    
                </a>
                <p>The Mark Of The Beastro blah blah blah</p>
                <div>
                    <h2>Information </h2>
                    markofthebeastro@gmail.com
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
                </div> 
                </div>
                </div>
                <div class="page-img-container-right">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/shake-icon.png" alt="Shake Icon" class="page-img-right"/>
                </div>
            </div>
        </section>
            <section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
                <div class="section-beehive">
                    <a href="beehive">
                    <img src="beehive src" class="post-image" />
                    </a>
                </div>
            </section>
        </section>
    </div>
</div>
<?php get_footer(); ?>

<!-- specify posts
<?php get_post(1428); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </article>
            -->