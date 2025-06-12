<?php
if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/acf-fields.php';

add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        $blocks = [
            ['header-block', 'Header Block', 'Phần header gồm logo, menu, nút liên hệ'],
            ['hero-block', 'Hero Block', 'Phần hero đầu trang'],
            ['technology-highlight', 'Technology Highlight', 'Giới thiệu công nghệ'],
            ['features-icons', 'Features Icons', 'Các icon tính năng'],
            ['blue-statement', 'Blue Statement', 'Đoạn văn bản nền xanh'],
            ['product-cards', 'Product Cards', 'Các sản phẩm'],
            ['about-video', 'About Video', '"About Us" + video'],
            ['contact-cta', 'Contact CTA', 'Đoạn văn cam kết'],
            ['footer-info', 'Footer Info', 'Footer cuối trang'],
            ['hero-section-2', 'Hero Section 2', 'Block hero section cho News'],
            ['news-featured-slider', 'News/Featured Slider', 'Block slider tin nổi bật'],
            ['news-grid-list', 'News Grid/List', 'Block danh sách tin dạng lưới'],
            ['resource-section', 'Resource Section', 'Block hiển thị ảnh và nội dung tài nguyên'],
            ['resource-section-noimg', 'Resource Section No Image', 'Block hiển thị nội dung tài nguyên không có ảnh'],
            ['quote-section', 'Quote/Testimonial Section', 'Block trích dẫn/nhận xét'],
            ['news-featured-slider-2', 'News/Featured Slider 2', 'Block slider tin nổi bật không có mũi tên'],
            ['related-news', 'Related News', 'Block hiển thị tin liên quan dạng lưới'],
            ['hero-section-3', 'Hero Section 3', 'Block hero section cho Lorem'],
            ['contact-cta-v2', 'Contact CTA V2', 'Block call to action liên hệ'],
            ['contact-cta-v3', 'Contact CTA V3', 'Block form đăng ký nhận tin'],
        ];
        foreach ($blocks as $block) {
            acf_register_block_type([
                'name' => $block[0],
                'title' => $block[1],
                'description' => $block[2],
                'render_template' => "acf-blocks/{$block[0]}.php",
                'category' => 'layout',
                'icon' => 'admin-generic',
                'keywords' => explode('-', $block[0]),
                'mode' => 'preview',
                'supports' => ['align' => false],
            ]);
        }
    }
}

function homepage_theme_enqueue_styles()
{
    wp_enqueue_style('homepage-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'homepage_theme_enqueue_styles');

function homepage_theme_add_editor_styles()
{
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'homepage_theme_add_editor_styles');
