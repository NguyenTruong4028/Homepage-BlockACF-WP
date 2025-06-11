<?php

/**
 * Header Block Template.
 */
$id = 'header-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'header-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$logo = get_field('header_logo');
$menu_items = get_field('menu_items');
$header_image = get_field('header_image');
$search_content = get_field('search_content');
$search_image = get_field('search_image');
$contact_button = get_field('contact_button');

if (!is_admin()) {
    echo '<!--';
    var_dump($contact_button);
    echo '-->';
}
?>
<header id="<?php echo esc_attr($id); ?>" class="header <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="header-logo">
            <?php if ($logo): ?>
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            <?php endif; ?>
        </div>
        <nav class="header-nav">
            <?php if ($menu_items): ?>
                <ul>
                    <?php foreach ($menu_items as $item): ?>
                        <li><a href="<?php echo esc_url($item['link']); ?>"><?php echo esc_html($item['text']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </nav>
        <?php if ($header_image): ?>
            <div class="header-image">
                <img src="<?php echo esc_url($header_image['url']); ?>" alt="<?php echo esc_attr($header_image['alt']); ?>">
            </div>
        <?php endif; ?>
        <?php if ($search_content || $search_image): ?>
            <div class="search">
                <div class="search-content">
                    <div class="content-text">
                        <?php echo $search_content ? wp_kses_post($search_content) : ''; ?>
                    </div>
                    <div class="content-image">
                        <?php if ($search_image): ?>
                            <img src="<?php echo esc_url($search_image['url']); ?>" alt="<?php echo esc_attr($search_image['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="header-contact">
            <?php if ($contact_button): ?>
                <a href="<?php echo esc_url($contact_button['link']); ?>" class="button">
                    <?php echo esc_html($contact_button['text']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var header = document.querySelector('.header');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 60) { // 60px hoặc giá trị bạn muốn
                header.classList.add('header--fade');
            } else {
                header.classList.remove('header--fade');
            }
        });
    });
</script>