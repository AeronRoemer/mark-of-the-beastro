<!-- Used for single blog posts. Fallback page used before singular and index.php -->
<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?> SINGULE POST</h1>
    </article>
            <section class="section-carousel">
                <?php get_sidebar(); ?>
            </section>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content' ); ?>
            </article>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
            <?php endif; ?>
        </div>
</div>
<?php get_footer(); ?>