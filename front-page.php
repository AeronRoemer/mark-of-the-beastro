<!-- Page pulled in for static front page -->
<?php get_header(); ?>
<div id="primary" class="content-area extended">
<main id="main" class="site-main" role="main">
        <section class="section-carousel">
        widget area
            <?php get_sidebar(); ?>
        </section>
        <section class="content-container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </article>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
            <?php endif; ?>
            <section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
            <div class="section-post">
                <a href="beehive">
                <img src="beehive src" class="post-image" />
                </a>
                content-page
                <div class="entry-title">
                    The Beehive
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>