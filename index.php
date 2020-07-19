<?php get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="content-container site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    </article>
            <section class="section-carousel">
                CAROUSEL
            </section>
            <section class="section-order">
                ORDER/DELIVERY
            </section>
            <section class="section-menu">
                MENU
            </section>
            <section class="section-info">
                INFO
            </section>
            <section class="beehive-link">
                BEEHIVE
            </section>
        </div>
</div>
<?php get_footer(); ?>