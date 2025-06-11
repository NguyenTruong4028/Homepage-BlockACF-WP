<?php

/**
 * Contact CTA Block Template.
 */
$id = 'contact-cta-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'contact-cta-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$image = get_field('cta_background');
$cta_note = get_field('cta_note');
$cta_note_title = get_field('cta_note_title');
?>
<section id="<?php echo esc_attr($id); ?>" class="cta-section <?php echo esc_attr($className); ?>">
    <?php if ($image): ?><img src="<?php echo esc_url($image['url']); ?>" alt=""><?php endif; ?>
</section>
<?php if ($cta_note): ?>
    <div class="cta-note">
        <?php if ($cta_note_title): ?><strong class="cta-note-title"><?php echo esc_html($cta_note_title); ?></strong><br><?php endif; ?>
        <?php echo esc_html($cta_note); ?>
    </div>
<?php endif; ?>