<?php 
$query = new WP_Query( array( 'category_name' => 'gallery'));
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
posts
    <?php get_template_part( '/content', 'page' ); ?>
</article>
<?php endwhile; else :?>
    <?php get_template_part( '/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
<?php endif; ?>