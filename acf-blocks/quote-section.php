<?php
$quote = get_field('quote_text');
$author = get_field('quote_author');
$author_info = get_field('quote_author_info');
$image = get_field('quote_image');
?>
<section class="quote-section" style="margin:35px 165px;">
    <div class="quote-section-inner" style="display:flex; align-items:stretch; border-radius:24px; overflow:hidden;">
        <div class="quote-content" style="background:#1976d2; color:#fff; flex:1; padding:48px 40px; display:flex; flex-direction:column; justify-content:center;">
            <?php if ($quote): ?>
                <blockquote style="font-size:1.5rem; font-weight:700; margin:0 0 32px 0;">"<?php echo esc_html($quote); ?>"</blockquote>
            <?php endif; ?>
            <?php if ($author): ?>
                <div class="quote-author" style="font-size:1rem; font-weight:600;"><?php echo esc_html($author); ?></div>
            <?php endif; ?>
            <?php if ($author_info): ?>
                <div class="quote-author-info" style="font-size:0.95rem;"><?php echo esc_html($author_info); ?></div>
            <?php endif; ?>
        </div>
        <?php if ($image): ?>
            <div class="quote-image" style="flex:1; min-width:200px;">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width:100%; height:100%; object-fit:cover; display:block;" />
            </div>
        <?php endif; ?>
    </div>
</section>