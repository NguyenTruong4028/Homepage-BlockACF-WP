<?php
$title = get_field('related_news_title');
$count = get_field('related_news_count') ?: 3;
$cat = get_field('related_news_category');
$args = [
    'post_type' => 'post',
    'posts_per_page' => $count,
];
if ($cat) $args['cat'] = $cat;
$news_query = new WP_Query($args);
?>
<section class="related-news-section" style="margin:48px 0;">
    <div class="related-news-inner" style="max-width:1200px; margin:0 auto;">
        <?php if ($title): ?>
            <div style="width:100%; display:flex; flex-direction:column;">
                <div style="width:60px; height:4px; background:#1976d2; border-radius:2px; "></div>
                <h2 class="related-news-title" style="font-size:2rem; font-weight:700; margin-bottom:32px; color:#15323d; padding:0;"><?php echo esc_html($title); ?></h2>
            </div>
        <?php endif; ?>
        <?php if ($news_query->have_posts()): ?>
            <div class="related-news-grid" style="display:grid; grid-template-columns:repeat(3,1fr); gap:32px;">
                <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                    <div class="related-news-item" style="background:#f5f9fc; border-radius:24px; padding:32px 28px 40px 28px; box-shadow:0 2px 16px rgba(0,0,0,0.04);">
                        <h4 style="font-size:1.1rem; color:#15323d; font-weight:500; margin:0 0 24px 0;"><?php the_title(); ?></h4>
                        <a href="<?php the_permalink(); ?>" style="font-weight:bold; color:#15323d; text-decoration:underline; font-size:1rem;">Read now</a>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>