<?php if('' != get_theme_mod('alert-header')): ?>
    <section>
    <div class="alert-container">
        <div class="alert-left">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/left-arrow.gif" alt="Neon Arrow" class="arrow-left"/>
        </div>
        <div class="alert-box alert">
            <h1 class='alert-header neon-text'><?php echo get_theme_mod('alert-header'); ?></h1>
            <?php if('' != get_theme_mod('alert-info')): ?>
            <p class="alert-text"><?php echo get_theme_mod('alert-info'); ?></p>
        </div>
        <div class="alert-right">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/right-arrow.gif" alt="Neon Arrow" class="arrow-right"/>
        </div>
    </div>
            
    <?php endif; ?>
    </section>
<?php endif; ?>