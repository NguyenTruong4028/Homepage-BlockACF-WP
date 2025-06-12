<?php

/**
 * Footer Info Block Template.
 */
$id = 'footer-info-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'footer-info-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$logo = get_field('footer_logo');
$footer_columns = get_field('footer_columns');
$social_links = get_field('social_links');
$contact_address = get_field('contact_address');
$contact_email = get_field('contact_email');
$contact_phone = get_field('contact_phone');
$copyright = get_field('copyright_text');
$policy_link = get_field('policy_link');
$provider_agreement_link = get_field('provider_agreement_link');
$footer_note = get_field('footer_note');
$footer_text_1 = get_field('footer_text_1');
$footer_text_2 = get_field('footer_text_2');
$footer_text_3 = get_field('footer_text_3');
?>
<footer id="<?php echo esc_attr($id); ?>" class="footer <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="footer-row">
            <div class="footer-col logo-social">
                <div class="footer-logo">
                    <?php if ($logo): ?><img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"><?php endif; ?>
                </div>
                <div class="social-icons">
                    <?php if ($social_links): foreach ($social_links as $social): ?>
                            <a href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener">
                                <?php if (!empty($social['icon'])): ?><img src="<?php echo esc_url($social['icon']['url']); ?>" alt="icon"><?php endif; ?>
                            </a>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
            <?php if ($footer_columns): foreach ($footer_columns as $col): ?>
                    <div class="footer-col">
                        <?php if ($col['title']): ?><h4><?php echo esc_html($col['title']); ?></h4><?php endif; ?>
                        <?php if (!empty($col['links'])): ?><ul><?php foreach ($col['links'] as $link): ?><li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['text']); ?></a></li><?php endforeach; ?></ul><?php endif; ?>
                        <?php if (!empty($col['content'])): ?><p><?php echo esc_html($col['content']); ?></p><?php endif; ?>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-row">
                <div class="footer-bottom-texts">
                    <?php if ($footer_text_1): ?><span><?php echo esc_html($footer_text_1); ?></span><?php endif; ?>
                    <?php if ($footer_text_2): ?><span><?php echo esc_html($footer_text_2); ?></span><?php endif; ?>
                    <?php if ($footer_text_3): ?><span><?php echo esc_html($footer_text_3); ?></span><?php endif; ?>
                </div>
                <div class="footer-bottom-copyright">
                    <span><?php echo esc_html($copyright); ?></span>
                    <?php if ($policy_link): ?><a href="<?php echo esc_url($policy_link); ?>" target="_blank">Privacy Policy</a><?php endif; ?>
                    <?php if ($provider_agreement_link): ?><a href="<?php echo esc_url($provider_agreement_link); ?>" target="_blank">Provider Agreement</a><?php endif; ?>
                </div>
            </div>
            <?php if ($footer_note): ?>
                <div class="footer-bottom-note">
                    <?php echo nl2br(esc_html($footer_note)); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>