<!-- Fallback page used before index.php -->
<?php get_header(); ?>
</header>
<?php
        $liveimgArray = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
?>
<main id="main" role="main">
<div id="primary" class="content-area background-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)),
        url('<?php echo $liveimgArray[0]; ?>'); ">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    </article>
    <section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
            </div>
            </div>
            </section>

        </div>
</div>
<?php get_footer(); ?>