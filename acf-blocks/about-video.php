<?php

/**
 * About Video Block Template.
 */
$id = 'about-video-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'about-video-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$title = get_field('about_title');
$description = get_field('about_description');
$image = get_field('about_image');
?>
<section id="<?php echo esc_attr($id); ?>" class="about-us-section <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="about-content">
            <?php if ($title): ?>
                <div class="title-line"></div>
                <h2><?php echo esc_html($title); ?></h2>
            <?php endif; ?>
            <?php if ($description): ?><p><?php echo esc_html($description); ?></p><?php endif; ?>
            <button class="button primary btn">Learn more</button>
        </div>
        <div class="about-image">
            <?php if ($image): ?><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"><?php endif; ?>
            <div class="play-icon"></div>
        </div>
    </div>
</section>