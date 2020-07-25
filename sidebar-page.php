<?php 
if (! is_active_sidebar( 'main-sidebar' )){
    return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">
    WIDGET 2
    <?php dynamic_sidebar( 'page-sidebar' ); ?>
</aside>
