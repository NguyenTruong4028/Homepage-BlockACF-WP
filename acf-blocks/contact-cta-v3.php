<section class="contact-cta-v3">
    <div class="contact-cta-v3-inner">
        <?php if (get_field('cta3_eyebrow')): ?>
            <div class="cta3-eyebrow">
                <?php echo esc_html(get_field('cta3_eyebrow')); ?>
                <span></span>
            </div>
        <?php endif; ?>
        <?php if (get_field('cta3_title')): ?>
            <h2 class="cta3-title"><?php echo esc_html(get_field('cta3_title')); ?></h2>
        <?php endif; ?>
        <?php if (get_field('cta3_desc')): ?>
            <div class="cta3-desc"><?php echo esc_html(get_field('cta3_desc')); ?></div>
        <?php endif; ?>

        <?php
        $shortcode = get_field('cta3_form_shortcode');
        if ($shortcode) {
            echo do_shortcode($shortcode);
        } else {
        ?>
            <form class="cta3-form">
                <div class="cta3-form-row">
                    <input type="text" name="first_name" placeholder="First name*" required>
                    <input type="text" name="last_name" placeholder="Last name*" required>
                </div>
                <div class="cta3-form-row">
                    <input type="email" name="email" placeholder="Email*" required>
                    <input type="text" name="phone" placeholder="Phone*" required>
                </div>
                <button type="submit" class="cta3-btn">
                    <?php echo esc_html(get_field('cta3_btn_text') ?: 'Contact us'); ?>
                </button>
            </form>
        <?php } ?>
    </div>
    <?php if (get_field('cta3_background_image')): ?>
        <div class="cta3-background-image">
            <?php
            $image = get_field('cta3_background_image');
            echo wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'cta3-bg-img'));
            ?>
        </div>
    <?php endif; ?>
</section>