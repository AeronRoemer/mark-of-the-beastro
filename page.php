<!-- Fallback page used before index.php -->
<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?> SINGULAR</h1>
    </article>
            <section class="section-carousel">
                <?php get_sidebar(); ?>
            </section>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </article>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
            <?php endif; ?>
        </div>
        <?php get_sidebar( 'page' ); ?>
</div>
<?php get_footer(); ?>