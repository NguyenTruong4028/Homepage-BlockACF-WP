<section class="hero-section-2" style="position:relative; overflow:hidden; border-radius:24px; margin: 0 40px;">
    <?php $bg = get_field('hero2_image'); ?>
    <?php if ($bg): ?>
        <img src="<?php echo esc_url($bg['url']); ?>" alt="<?php echo esc_attr($bg['alt']); ?>" class="hero2-bg" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:1;" />
    <?php endif; ?>
    <div class="hero2-overlay" style="position:absolute;top:0;left:0;width:100%;height:100%;background:#1976d2;opacity:0.92;z-index:2;"></div>
    <div class="hero2-content" style="position:relative;z-index:3;padding:60px 40px 60px 80px;max-width:700px;color:#fff;">
        <?php if (get_field('hero2_eyebrow')): ?>
            <div class="hero2-eyebrow" style="font-weight:bold;letter-spacing:1px;text-transform:uppercase;font-size:16px;margin-bottom:16px;">
                <?php echo esc_html(get_field('hero2_eyebrow')); ?>
                <span style="display:inline-block;width:40px;height:2px;background:#fff;margin-left:12px;vertical-align:middle;"></span>
            </div>
        <?php endif; ?>
        <?php if (get_field('hero2_title')): ?>
            <h2 style="font-size:56px;font-weight:600;line-height:1.1;margin:0 0 24px 0;">
                <?php echo esc_html(get_field('hero2_title')); ?>
            </h2>
        <?php endif; ?>
        <?php if (get_field('hero2_description')): ?>
            <p style="font-size:22px;font-weight:500;line-height:1.4;margin:0;">
                <?php echo esc_html(get_field('hero2_description')); ?>
            </p>
        <?php endif; ?>
    </div>
</section>