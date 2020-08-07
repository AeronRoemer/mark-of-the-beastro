<!-- Fallback page used before index.php -->
<?php get_header(); ?>
</header>
<div id="primary" class="content-area">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        $liveimgArray = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    ?>
    <h1><?php the_title(); ?> pageSINGULAR</h1>
    </article>
    <div class="top-img-container">
        <img src="<?php echo $liveimgArray[0]; ?>" class="top-img" />
    </div>
                        <section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
            <div class="section-post">
                
                <div>
                <a href="<?php the_permalink( ); ?>">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </a>
                This is basic text that will eventually draw from a description. 
            </div>
            </div>
            </section>

        </div>
        <?php get_sidebar( 'page' ); ?>
</div>
<?php get_footer(); ?>