<?php

/**
 * Product Cards Block Template.
 */
$id = 'product-cards-' . $block['id'];
if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'product-cards-block';
if (!empty($block['className'])) $className .= ' ' . $block['className'];
if (!empty($block['align'])) $className .= ' align' . $block['align'];
$products = get_field('products');
?>
<section id="<?php echo esc_attr($id); ?>" class="product-overview-section <?php echo esc_attr($className); ?>">
    <div class="container">
        <?php if ($products): foreach ($products as $product): ?>
                <div class="product-item">
                    <div class="product-info">
                        <div class="product-info-top">
                            <?php if ($product['title']): ?>
                                <h3><?php echo esc_html($product['title']); ?></h3>
                            <?php endif; ?>
                            <?php if ($product['button']): ?>
                                <a href="<?php echo esc_url($product['button']['link']); ?>" class="learn-more-link">&gt;</a>
                            <?php endif; ?>
                        </div>
                        <?php if ($product['description']): ?>
                            <div class="product-info-desc"><?php echo esc_html($product['description']); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="product-image">
                        <?php if ($product['image']): ?><img src="<?php echo esc_url($product['image']['url']); ?>" alt="<?php echo esc_attr($product['image']['alt']); ?>"><?php endif; ?>
                    </div>
                </div>
        <?php endforeach;
        endif; ?>
    </div>
</section>