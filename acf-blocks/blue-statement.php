<?php

/**
 * Blue Statement Block Template.
 */
$id = 'blue-statement-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'blue-statement-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$statement = get_field('statement_text');
$background_image = get_field('statement_background_image');
$statement_note = get_field('statement_note');

$style = '';
if ($background_image && !empty($background_image['url'])) {
    $style .= 'background-image: url(' . esc_url($background_image['url']) . ');';
    $style .= 'background-size: cover;';
    $style .= 'background-position: center center;';
    $style .= 'background-repeat: no-repeat;';
}

?>
<section id="<?php echo esc_attr($id); ?>" class="statement-section <?php echo esc_attr($className); ?>" style="<?php echo esc_attr($style); ?>">
    <div class="container">
        <?php if ($statement): ?><p><?php echo esc_html($statement); ?></p><?php endif; ?>
    </div>
</section>
<?php if ($statement_note): ?>
    <div class="statement-note">
        <strong>Disclaimer</strong><br>
        <?php echo esc_html($statement_note); ?>
    </div>
<?php endif; ?>