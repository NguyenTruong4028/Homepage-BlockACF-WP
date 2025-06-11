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
            ['contact-cta', 'Contact CTA', 'Get in touch'],
            ['footer-info', 'Footer Info', 'Footer cuối trang'],
            ['disclaimer-block', 'Disclaimer Block', 'Đoạn disclaimer cuối trang']
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
    add_theme_support('editor-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'homepage_theme_add_editor_styles');
