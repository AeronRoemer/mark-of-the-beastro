<?php
// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'bg-img' ) ) : ?>
 <div class="background-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),
     url('<?php echo get_theme_mod( 'bg-img' ); ?>'); ">
 
</div>
<?php endif; ?>