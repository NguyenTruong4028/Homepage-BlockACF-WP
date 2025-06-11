<?php

/**
 * Features Icons Block Template.
 */
$id = 'features-icons-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'features-icons-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$features = get_field('features');
?>
<section id="<?php echo esc_attr($id); ?>" class="icon-feature-section <?php echo esc_attr($className); ?>">
    <div class="container">
        <?php if ($features): foreach ($features as $feature): ?>
                <div class="feature-item">
                    <?php if (!empty($feature['icon'])): ?>
                        <div class="feature-icon">
                            <img src="<?php echo esc_url($feature['icon']['url']); ?>" alt="<?php echo esc_attr($feature['icon']['alt']); ?>">
                        </div>
                    <?php endif; ?>
                    <div class="feature-divider"></div>
                    <?php if (!empty($feature['title'])): ?>
                        <h3><?php echo esc_html($feature['title']); ?></h3>
                    <?php endif; ?>
                </div>
        <?php endforeach;
        endif; ?>
    </div>
</section>