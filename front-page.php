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
        <section class="section-carousel">
        <?php 
            $query = new WP_Query( array( 'category_name' => 'gallery'));
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </article>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
            <?php endif; ?> 
            <?php get_sidebar(); ?>
        </section>

        <?php get_template_part( 'template-parts/alert'); ?>

        <section class="content-container">
        <?php 
            $query = new WP_Query( array( 'category_name' => 'front'));
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </article>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
            <?php endif; ?>
            <!--Permanant Sections: About & Beehive Link Image -->
            <section class="post section-info neon-text">
                <div>
                    Information 
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
                https://www.yelp.com/biz/mark-of-the-beastro-salt-lake-city-2?osq=mark+of+the+beastro
                markofthebeastro@gmail.com
            </section>
            <section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
                <div class="section-beehive">
                    <a href="beehive">
                    <img src="beehive src" class="post-image" />
                    </a>
                    <div class="entry-title">
                        The Beehive 
                    </div>
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