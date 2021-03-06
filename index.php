<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    </article>
            <section class="section-carousel">
                <?php get_sidebar(); ?>
            </section>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content' ); ?>
            </article>
            <section class="section-order">
                ORDER/DELIVERY
            </section>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
            <?php endif; ?>
            <section class="section-menu">
                MENU
            </section>
            <section class="section-info">
                INFO.
            </section>
            <section class="beehive-link">
                BEEHIVE
            </section>
        </div>
</div>
<?php get_footer(); ?>