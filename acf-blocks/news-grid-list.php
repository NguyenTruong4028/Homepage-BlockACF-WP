<section class="news-grid-list">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $count = get_field('news_grid_count') ?: 9;
    $cat = get_field('news_grid_category');
    $args = [
        'post_type' => 'post',
        'posts_per_page' => $count,
        'paged' => $paged,
    ];
    if ($cat) {
        $args['cat'] = $cat;
    }
    $news_query = new WP_Query($args);
    ?>
    <div class="news-grid-list-inner">
        <?php if (get_field('news_grid_title')): ?>
            <h2 class="news-grid-title"><?php the_field('news_grid_title'); ?></h2>
        <?php endif; ?>
        <?php if ($news_query->have_posts()): ?>
            <div class="news-grid">
                <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                    <div class="news-item">
                        <div class="news-item-content">
                            <h4 class="news-item-title"><?php the_title(); ?></h4>
                            <a href="<?php the_permalink(); ?>" class="news-item-link">Read now</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="news-pagination">
                <?php
                echo paginate_links([
                    'total' => $news_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '&lsaquo;',
                    'next_text' => '&rsaquo;',
                ]);
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>