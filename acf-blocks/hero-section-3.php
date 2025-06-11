<section class="hero-section-3" style="width:1360px; height:417px; margin:auto;">
    <?php $bg = get_field('hero3_image'); ?>
    <?php if ($bg): ?>
        <img src="<?php echo esc_url($bg['url']); ?>" alt="<?php echo esc_attr($bg['alt']); ?>" class="hero-section-3-bg" />
    <?php endif; ?>
    <div class="hero-section-3-overlay"></div>
    <div class="hero-section-3-content">
        <?php if (get_field('hero3_eyebrow')): ?>
            <div class="hero-section-3-eyebrow">
                <?php echo esc_html(get_field('hero3_eyebrow')); ?>
                <span></span>
            </div>
        <?php endif; ?>
        <?php if (get_field('hero3_title')): ?>
            <h2 class="hero-section-3-title">
                <?php echo esc_html(get_field('hero3_title')); ?>
            </h2>
        <?php endif; ?>
        <?php if (get_field('hero3_description')): ?>
            <p class="hero-section-3-description">
                <?php echo esc_html(get_field('hero3_description')); ?>
            </p>
        <?php endif; ?>
    </div>
</section>