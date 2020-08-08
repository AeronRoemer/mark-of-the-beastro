<section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
  <div class="section-post">
    <?php
        $liveimgArray = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    ?>
    
    <div class="entry-text">
    <a href="<?php the_permalink( ); ?>">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </a>
    This is basic text that will eventually draw from a description. 
   </div>
    <div class="page-img-container">
      <img src="<?php echo $liveimgArray[0]; ?>" class="page-img" />
    </div>
  </div>
</section>
