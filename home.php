<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php wp_title( '' ); ?></h1>
    HOME..php
    </article>
            <section class="section-home">
                <?php get_sidebar(); ?>
            </section>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content-posts' ); ?>
            </article>
            <?php endwhile; else :?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> 
                <!-- setup due to hyphen in content-none.php -->
                <!-- not neccessary if 404 page exists -->
            <?php endif; ?>
            <?php echo paginate_links(); ?>
        </div>
</div>

<?php get_footer(); ?>