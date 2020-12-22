
<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    </article>
            </section>
                        <section id="post-<?php the_ID(); ?>">
            <div class="section-post">
                <div class="page-img-container">
                    <img src="<?php echo $liveimgArray[0]; ?>" class="page-header-img" />
                </div>
            
                <?php
                    $liveimgArray = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                ?>
                <div class="entry-text">
                <a href="<?php the_permalink( ); ?>">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </a>
            </div>
                <div class="page-img-container">
                
                </div>
                        </div>
            </section>
        </div>
</div>
<?php get_footer(); ?>