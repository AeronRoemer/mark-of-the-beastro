<?php
// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'bg-img' ) ) : ?>
 
<img src="<?php echo get_theme_mod( 'bg-img' ); ?>" alt="Background Image" >
 
<?php endif; ?>