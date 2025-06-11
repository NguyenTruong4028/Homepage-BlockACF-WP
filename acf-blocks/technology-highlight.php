<?php

/**
 * Technology Highlight Block Template.
 */
$id = 'tech-highlight-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'technology-highlight-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];

$title = get_field('tech_title');
$description = get_field('tech_description');
$tech_main_image = get_field('tech_main_image');
$button_text = get_field('tech_button_text');
$button_link = get_field('tech_button_link');

?>
<section id="<?php echo esc_attr($id); ?>" class="technology-highlight-section <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="tech-highlight-inner">
            <?php if ($tech_main_image):
                $image_url = $tech_main_image['url'];
                $image_alt = $tech_main_image['alt'];
            ?>
                <div class="tech-highlight-main-image">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                </div>
            <?php endif; ?>

            <div class="tech-highlight-content">
                <div class="tech-highlight-eyebrow"></div>
                <?php if ($title): ?><h2><?php echo esc_html($title); ?></h2><?php endif; ?>
                <?php if ($description): ?><p><?php echo esc_html($description); ?></p><?php endif; ?>
                <?php if ($button_text && $button_link): ?>
                    <a href="<?php echo esc_url($button_link); ?>" class="button primary btn"><?php echo esc_html($button_text); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>