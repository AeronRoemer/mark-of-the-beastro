<!-- Page pulled in for static front page -->
<?php get_header(); ?>
<div id="primary" class="content-area extended">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?> 404 </h1>
    </article>
                <?php get_template_part( 'template-parts/content', 'none' ); ?> <!-- setup due to hyphen in content-none.php -->
        </div>
</div>
<?php get_footer(); ?>