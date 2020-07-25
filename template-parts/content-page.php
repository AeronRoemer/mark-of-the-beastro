<section id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
  <div class="section-post">
    <?php the_post_thumbnail( 'medium' ); ?>
    content-page.php
    <div class="entry-title">
      <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
   </div>
  </div>
</section>
