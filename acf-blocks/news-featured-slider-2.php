<section class="quote-section" style="margin:35px 165px; display:flex; justify-content:center;max-width:1110px; height:430px;   ">
    <?php if (have_rows('slider2_items')): ?>
        <div class="slider2-list" style="width:100%;  display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <?php while (have_rows('slider2_items')): the_row(); ?>
                <div class="slider2-slide" style="display:flex; background:#f5f9fc; border-radius:32px; overflow:hidden; box-shadow:0 2px 16px rgba(0,0,0,0.04); width:100%; margin:0 0 32px 0;">
                    <div class="slider2-content" style="flex:1.2; padding:48px 40px; display:flex; flex-direction:column; justify-content:center; position:relative;">
                        <span class="slider2-badge" style="display:block; position:absolute; left:0; top:-24px; width:36px; height:24px; background:#2ed6a1; border-radius:12px 0 12px 0; z-index:3;"></span>
                        <?php if (get_sub_field('featured')): ?>
                            <div class="slider2-featured" style="font-weight:bold; color:#15323d; font-size:18px; margin-bottom:18px;">FEATURED</div>
                        <?php endif; ?>
                        <h2 style="font-size:2rem; color:#15323d; font-weight:500; margin:0 0 24px 0;"><?php the_sub_field('title'); ?></h2>
                        <div style="font-size:1.1rem; color:#15323d; margin-bottom:32px;"><?php the_sub_field('description'); ?></div>
                        <?php if (get_sub_field('link')): ?>
                            <a href="<?php the_sub_field('link'); ?>" style="font-weight:bold; color:#15323d; text-decoration:underline; font-size:1.1rem;">Read now</a>
                        <?php endif; ?>
                    </div>
                    <div class="slider2-image" style="flex:1; display:flex; align-items:center; justify-content:center; overflow:hidden;">
                        <?php $img = get_sub_field('image');
                        if ($img): ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" style="width:100%; height:100%; object-fit:cover;" />
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>