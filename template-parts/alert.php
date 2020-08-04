<?php if('' != get_theme_mod('alert-header')): ?>
    <section class="alert">
        <h1 class='alert-header neon-text'><?php echo get_theme_mod('alert-header'); ?></h1>
        <?php if('' != get_theme_mod('alert-info')): ?>
            <p class="alert-text"><?php echo get_theme_mod('alert-info'); ?></p>
    <?php endif; ?>
    </section>
<?php endif; ?>