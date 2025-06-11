<?php

/**
 * Contact CTA Block Template.
 */
$id = 'contact-cta-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'contact-cta-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$cta_note = get_field('cta_note');
$cta_note_title = get_field('cta_note_title');
?>
<?php if ($cta_note): ?>
    <div class="cta-note">
        <?php if ($cta_note_title): ?><strong class="cta-note-title"><?php echo esc_html($cta_note_title); ?></strong><br><?php endif; ?>
        <?php echo esc_html($cta_note); ?>
    </div>
<?php endif; ?>