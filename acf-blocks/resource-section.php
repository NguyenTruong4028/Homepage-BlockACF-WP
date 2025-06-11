<?php
$image = get_field('resource_image');
$title = get_field('resource_title');
$content = get_field('resource_content');
?>
<section class="resource-section">
    <?php if ($image): ?>
        <div class="resource-image-overlap">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
    <?php endif; ?>
    <div class="resource-content-wrap">
        <?php if ($title): ?>
            <h2 class="resource-title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        <?php if ($content): ?>
            <div class="resource-content-text">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
    </div>
</section>