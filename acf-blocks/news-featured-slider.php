<section class="news-featured-slider">
    <div class="slider-wrapper">
        <button class="slider-arrow prev">&#8249;</button>
        <?php if (have_rows('slider_items')): ?>
            <div class="slider">
                <?php while (have_rows('slider_items')): the_row(); ?>
                    <div class="slide">
                        <div class="slide-content">
                            <?php if (get_sub_field('featured')): ?>
                                <div class="slide-featured">FEATURED</div>
                            <?php endif; ?>
                            <h2 class="slide-title"><?php the_sub_field('title'); ?></h2>
                            <div class="slide-desc"><?php the_sub_field('description'); ?></div>
                            <?php if (get_sub_field('link')): ?>
                                <a href="<?php the_sub_field('link'); ?>" class="slide-link">Read now</a>
                            <?php endif; ?>
                        </div>
                        <div class="slide-image">
                            <?php $img = get_sub_field('image');
                            if ($img): ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <!-- Dấu nhấn màu xanh lá -->
                        <span class="slide-badge"></span>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <button class="slider-arrow next">&#8250;</button>
    </div>
</section>