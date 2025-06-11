<section class="contact-cta-v2">
    <div class="contact-cta-v2-inner">
        <?php if (get_field('cta2_eyebrow')): ?>
            <div class="cta2-eyebrow">
                <?php echo esc_html(get_field('cta2_eyebrow')); ?>
                <span></span>
            </div>
        <?php endif; ?>
        <?php if (get_field('cta2_title')): ?>
            <h2 class="cta2-title"><?php echo esc_html(get_field('cta2_title')); ?></h2>
        <?php endif; ?>
        <?php if (get_field('cta2_desc')): ?>
            <div class="cta2-desc"><?php echo esc_html(get_field('cta2_desc')); ?></div>
        <?php endif; ?>
        <?php if (get_field('cta2_button_text') && get_field('cta2_button_link')): ?>
            <a href="<?php echo esc_url(get_field('cta2_button_link')); ?>" class="cta2-btn">
                <?php echo esc_html(get_field('cta2_button_text')); ?>
            </a>
        <?php endif; ?>
    </div>
</section>