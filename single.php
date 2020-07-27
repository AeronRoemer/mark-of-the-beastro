<!-- Used for single blog posts. Fallback page used before singular and index.php
Single-post.php can be used if different post types pull different pages. -->
<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="single-page" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', get_post_format() ); ?> 
            <!-- could also use get_post_format in CSS classes rather than creating multiple pages -->
        </article>
        <?php endwhile; else :?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
        <?php endif; ?>
    </div>
    Single
</div>
<?php get_footer(); ?>