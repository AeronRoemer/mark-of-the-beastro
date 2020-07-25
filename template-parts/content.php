<article id="post-<?php the_ID(); ?>">
    <header class="entry-header">
    <?php the_title( '<h1>', '</h1>' ); ?>
        <div class="byline">
        <?php esc_html_e('Author: '); the_author();?>
        conntent.php
        </div>
    </header>
    <div class="entry-content">
    <?php the_content(); ?>
</div>