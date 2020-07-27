<!-- Page pulled in for static front page -->
<?php get_header(); ?>
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
            <section class="post section-info">
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
                https://www.facebook.com/Markofthebeastro/
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