<!-- Page pulled in for static front page -->
<?php get_header(); ?>
<div id="primary" class="content-area extended">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?> FRONTPAGE </h1>
    </article>
        <section class="section-carousel">
        widget area
            <?php get_sidebar(); ?>
        </section>
        <section>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </article>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
            <?php endif; ?>
        </section>
    </div>
</div>
<?php get_footer(); ?>