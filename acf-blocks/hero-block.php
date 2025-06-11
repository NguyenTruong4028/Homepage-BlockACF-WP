<?php

/**
 * Hero Block Template.
 */
$id = 'hero-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'hero-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$eyebrow = get_field('eyebrow');
$title = get_field('hero_title');
$description = get_field('hero_description');
$primary_button = get_field('hero_primary_button');
$secondary_button = get_field('hero_secondary_button');
$hero_image = get_field('hero_image');
?>
<section id="<?php echo esc_attr($id); ?>" class="hero-section <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="hero-content">
            <?php if ($eyebrow): ?><p class="eyebrow"><?php echo esc_html($eyebrow); ?></p><?php endif; ?>
            <?php if ($title): ?><h1><?php echo esc_html($title); ?></h1><?php endif; ?>
            <?php if ($description): ?><p><?php echo esc_html($description); ?></p><?php endif; ?>
            <div class="hero-buttons">
                <?php if ($primary_button): ?>
                    <a href="<?php echo esc_url($primary_button['link']); ?>" class="button primary"><?php echo esc_html($primary_button['text']); ?></a>
                <?php endif; ?>
                <?php if ($secondary_button): ?>
                    <a href="<?php echo esc_url($secondary_button['link']); ?>" class="button secondary"><?php echo esc_html($secondary_button['text']); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($hero_image): ?>
            <div class="hero-image">
                <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
            </div>
        <?php endif; ?>
    </div>
</section>