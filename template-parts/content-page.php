<section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
  <div class="section-post">
    <?php
        $liveimgArray = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    ?>
    <a href="<?php the_permalink( ); ?>">
      <img src="<?php echo $liveimgArray[0]; ?>" class="post-image" />
    </a>
    content-page
    <div class="entry-title">
      <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
   </div>
  </div>
</section>
