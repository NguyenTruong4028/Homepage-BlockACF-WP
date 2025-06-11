<?php
$title = get_field('resource_noimg_title');
$content = get_field('resource_noimg_content');
?>
<section class="resource-section resource-section-noimg">
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