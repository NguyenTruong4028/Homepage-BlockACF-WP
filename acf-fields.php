<?php
if (function_exists('acf_add_local_field_group')):

    // 1. Header Block
    acf_add_local_field_group([
        'key' => 'group_header_block',
        'title' => 'Header Block',
        'fields' => [
            [
                'key' => 'field_header_logo',
                'label' => 'Logo',
                'name' => 'header_logo',
                'type' => 'image',
                'return_format' => 'array',
            ],
            [
                'key' => 'field_menu_items',
                'label' => 'Menu Items',
                'name' => 'menu_items',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_menu_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_menu_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                ],
            ],
            [
                'key' => 'field_search_content',
                'label' => 'Search Content',
                'name' => 'search_content',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_search_image',
                'label' => 'Search Image',
                'name' => 'search_image',
                'type' => 'image',
                'return_format' => 'array',
            ],
            [
                'key' => 'field_contact_button',
                'label' => 'Contact Button',
                'name' => 'contact_button',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_contact_button_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_contact_button_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                ],
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/header-block']]],
    ]);

    // 2. Hero Block
    acf_add_local_field_group([
        'key' => 'group_hero_block',
        'title' => 'Hero Block',
        'fields' => [
            [
                'key' => 'field_eyebrow',
                'label' => 'Eyebrow',
                'name' => 'eyebrow',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero_title',
                'label' => 'Title',
                'name' => 'hero_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero_description',
                'label' => 'Description',
                'name' => 'hero_description',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_hero_primary_button',
                'label' => 'Primary Button',
                'name' => 'hero_primary_button',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_primary_button_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_primary_button_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                ],
            ],
            [
                'key' => 'field_hero_secondary_button',
                'label' => 'Secondary Button',
                'name' => 'hero_secondary_button',
                'type' => 'group',
                'sub_fields' => [
                    [
                        'key' => 'field_secondary_button_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_secondary_button_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                ],
            ],
            [
                'key' => 'field_hero_image',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'array',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/hero-block']]],
    ]);

    // 3. Technology Highlight Block
    acf_add_local_field_group([
        'key' => 'group_technology_highlight',
        'title' => 'Technology Highlight',
        'fields' => [
            [
                'key' => 'field_tech_title',
                'label' => 'Title',
                'name' => 'tech_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_tech_description',
                'label' => 'Description',
                'name' => 'tech_description',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_tech_main_image',
                'label' => 'Main Image',
                'name' => 'tech_main_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
            [
                'key' => 'field_tech_button_text',
                'label' => 'Button Text',
                'name' => 'tech_button_text',
                'type' => 'text',
                'default_value' => 'How it works',
            ],
            [
                'key' => 'field_tech_button_link',
                'label' => 'Button Link',
                'name' => 'tech_button_link',
                'type' => 'url',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/technology-highlight']]],
    ]);

    // 4. Features Icons Block
    acf_add_local_field_group([
        'key' => 'group_features_icons',
        'title' => 'Features Icons',
        'fields' => [
            [
                'key' => 'field_features',
                'label' => 'Features',
                'name' => 'features',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_feature_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                    ],
                    [
                        'key' => 'field_feature_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                ],
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/features-icons']]],
    ]);

    // 5. Blue Statement Block
    acf_add_local_field_group([
        'key' => 'group_blue_statement',
        'title' => 'Blue Statement',
        'fields' => [
            [
                'key' => 'field_statement_text',
                'label' => 'Statement',
                'name' => 'statement_text',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_statement_background_image',
                'label' => 'Background Image',
                'name' => 'statement_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/blue-statement']]],
    ]);

    // 6. Product Cards Block
    acf_add_local_field_group([
        'key' => 'group_product_cards',
        'title' => 'Product Cards',
        'fields' => [
            [
                'key' => 'field_products',
                'label' => 'Products',
                'name' => 'products',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_product_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_product_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ],
                    [
                        'key' => 'field_product_image',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                    ],
                    [
                        'key' => 'field_product_button',
                        'label' => 'Button',
                        'name' => 'button',
                        'type' => 'group',
                        'sub_fields' => [
                            [
                                'key' => 'field_product_button_text',
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'text',
                            ],
                            [
                                'key' => 'field_product_button_link',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/product-cards']]],
    ]);

    // 7. About Video Block
    acf_add_local_field_group([
        'key' => 'group_about_video',
        'title' => 'About Video',
        'fields' => [
            [
                'key' => 'field_about_title',
                'label' => 'Title',
                'name' => 'about_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_about_description',
                'label' => 'Description',
                'name' => 'about_description',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_about_image',
                'label' => 'Image',
                'name' => 'about_image',
                'type' => 'image',
                'return_format' => 'array',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/about-video']]],
    ]);

    // 8. Contact CTA Block
    acf_add_local_field_group([
        'key' => 'group_contact_cta',
        'title' => 'Contact CTA',
        'fields' => [
            [
                'key' => 'field_cta_note',
                'label' => 'CTA Note',
                'name' => 'cta_note',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_cta_note_title',
                'label' => 'CTA Note Title',
                'name' => 'cta_note_title',
                'type' => 'text',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/contact-cta']]],
    ]);

    // 9. Footer Info Block
    acf_add_local_field_group([
        'key' => 'group_footer_info',
        'title' => 'Footer Info',
        'fields' => [
            [
                'key' => 'field_footer_logo',
                'label' => 'Logo',
                'name' => 'footer_logo',
                'type' => 'image',
                'return_format' => 'array',
            ],
            [
                'key' => 'field_footer_columns',
                'label' => 'Footer Columns',
                'name' => 'footer_columns',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_footer_col_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_footer_col_links',
                        'label' => 'Links',
                        'name' => 'links',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'key' => 'field_footer_link_text',
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'text',
                            ],
                            [
                                'key' => 'field_footer_link_url',
                                'label' => 'URL',
                                'name' => 'url',
                                'type' => 'url',
                            ],
                        ],
                    ],
                    [
                        'key' => 'field_footer_col_content',
                        'label' => 'Content',
                        'name' => 'content',
                        'type' => 'textarea',
                    ],
                ],
            ],
            [
                'key' => 'field_social_links',
                'label' => 'Social Links',
                'name' => 'social_links',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_social_url',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'url',
                    ],
                    [
                        'key' => 'field_social_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                    ],
                ],
            ],
            [
                'key' => 'field_footer_text_1',
                'label' => 'Footer Text 1',
                'name' => 'footer_text_1',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_footer_text_2',
                'label' => 'Footer Text 2',
                'name' => 'footer_text_2',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_footer_text_3',
                'label' => 'Footer Text 3',
                'name' => 'footer_text_3',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_copyright_text',
                'label' => 'Copyright',
                'name' => 'copyright_text',
                'type' => 'text',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/footer-info']]],
    ]);

    // 10. Disclaimer Block
    acf_add_local_field_group([
        'key' => 'group_disclaimer_block',
        'title' => 'Disclaimer Block',
        'fields' => [
            [
                'key' => 'field_disclaimer_text',
                'label' => 'Disclaimer Text',
                'name' => 'disclaimer_text',
                'type' => 'textarea',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/disclaimer-block']]],
    ]);

    // 11. Hero Section 2 Block
    acf_add_local_field_group([
        'key' => 'group_hero_section_2',
        'title' => 'Hero Section 2',
        'fields' => [
            [
                'key' => 'field_hero2_eyebrow',
                'label' => 'Eyebrow',
                'name' => 'hero2_eyebrow',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero2_title',
                'label' => 'Title',
                'name' => 'hero2_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero2_description',
                'label' => 'Description',
                'name' => 'hero2_description',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_hero2_image',
                'label' => 'Background Image',
                'name' => 'hero2_image',
                'type' => 'image',
                'return_format' => 'array',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/hero-section-2']]],
    ]);

    // 12. News/Featured Slider Block
    acf_add_local_field_group([
        'key' => 'group_news_featured_slider',
        'title' => 'News/Featured Slider',
        'fields' => [
            [
                'key' => 'field_slider_items',
                'label' => 'Slider Items',
                'name' => 'slider_items',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_slider_featured',
                        'label' => 'Featured',
                        'name' => 'featured',
                        'type' => 'true_false',
                        'ui' => 1,
                    ],
                    [
                        'key' => 'field_slider_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_slider_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ],
                    [
                        'key' => 'field_slider_image',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                    ],
                    [
                        'key' => 'field_slider_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                ],
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/news-featured-slider']]],
    ]);

    // 13. News Grid/List Block
    acf_add_local_field_group([
        'key' => 'group_news_grid_list',
        'title' => 'News Grid/List',
        'fields' => [
            [
                'key' => 'field_news_grid_title',
                'label' => 'Section Title',
                'name' => 'news_grid_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_news_grid_count',
                'label' => 'Số lượng tin hiển thị',
                'name' => 'news_grid_count',
                'type' => 'number',
                'default_value' => 9,
            ],
            [
                'key' => 'field_news_grid_category',
                'label' => 'Chuyên mục tin',
                'name' => 'news_grid_category',
                'type' => 'taxonomy',
                'taxonomy' => 'category',
                'field_type' => 'select',
                'allow_null' => 1,
                'add_term' => 0,
                'return_format' => 'id',
                'multiple' => 0,
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/news-grid-list']]],
    ]);

    // 14. Resource Section Block
    acf_add_local_field_group([
        'key' => 'group_resource_section',
        'title' => 'Resource Section',
        'fields' => [
            [
                'key' => 'field_resource_image',
                'label' => 'Image',
                'name' => 'resource_image',
                'type' => 'image',
                'return_format' => 'array',
            ],
            [
                'key' => 'field_resource_title',
                'label' => 'Title',
                'name' => 'resource_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_resource_content',
                'label' => 'Content',
                'name' => 'resource_content',
                'type' => 'wysiwyg',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/resource-section']]],
    ]);

    // 15. Quote/Testimonial Section Block
    acf_add_local_field_group([
        'key' => 'group_quote_section',
        'title' => 'Quote/Testimonial Section',
        'fields' => [
            [
                'key' => 'field_quote_text',
                'label' => 'Quote Text',
                'name' => 'quote_text',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_quote_author',
                'label' => 'Author',
                'name' => 'quote_author',
                'type' => 'text',
            ],
            [
                'key' => 'field_quote_author_info',
                'label' => 'Author Info',
                'name' => 'quote_author_info',
                'type' => 'text',
            ],
            [
                'key' => 'field_quote_image',
                'label' => 'Image',
                'name' => 'quote_image',
                'type' => 'image',
                'return_format' => 'array',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/quote-section']]],
    ]);

    // 16. News/Featured Slider 2
    acf_add_local_field_group([
        'key' => 'group_news_featured_slider_2',
        'title' => 'News/Featured Slider 2',
        'fields' => [
            [
                'key' => 'field_slider2_items',
                'label' => 'Slider Items',
                'name' => 'slider2_items',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_slider2_featured',
                        'label' => 'Featured',
                        'name' => 'featured',
                        'type' => 'true_false',
                        'ui' => 1,
                    ],
                    [
                        'key' => 'field_slider2_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_slider2_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ],
                    [
                        'key' => 'field_slider2_image',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'array',
                    ],
                    [
                        'key' => 'field_slider2_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                ],
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/news-featured-slider-2']]],
    ]);

    // 17. Related News Block
    acf_add_local_field_group([
        'key' => 'group_related_news',
        'title' => 'Related News',
        'fields' => [
            [
                'key' => 'field_related_news_title',
                'label' => 'Section Title',
                'name' => 'related_news_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_related_news_count',
                'label' => 'Số lượng tin hiển thị',
                'name' => 'related_news_count',
                'type' => 'number',
                'default_value' => 3,
            ],
            [
                'key' => 'field_related_news_category',
                'label' => 'Chuyên mục tin',
                'name' => 'related_news_category',
                'type' => 'taxonomy',
                'taxonomy' => 'category',
                'field_type' => 'select',
                'allow_null' => 1,
                'add_term' => 0,
                'return_format' => 'id',
                'multiple' => 0,
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/related-news']]],
    ]);

    // 18. Hero Section 3 Block
    acf_add_local_field_group([
        'key' => 'group_hero_section_3',
        'title' => 'Hero Section 3',
        'fields' => [
            [
                'key' => 'field_hero3_eyebrow',
                'label' => 'Eyebrow',
                'name' => 'hero3_eyebrow',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero3_title',
                'label' => 'Title',
                'name' => 'hero3_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_hero3_description',
                'label' => 'Description',
                'name' => 'hero3_description',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_hero3_image',
                'label' => 'Background Image',
                'name' => 'hero3_image',
                'type' => 'image',
                'return_format' => 'array',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/hero-section-3']]],
    ]);

    // 19. Resource Section No Image Block
    acf_add_local_field_group([
        'key' => 'group_resource_section_noimg',
        'title' => 'Resource Section No Image',
        'fields' => [
            [
                'key' => 'field_resource_noimg_title',
                'label' => 'Title',
                'name' => 'resource_noimg_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_resource_noimg_content',
                'label' => 'Content',
                'name' => 'resource_noimg_content',
                'type' => 'wysiwyg',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/resource-section-noimg']]],
    ]);

    // 20. Contact CTA V2 Block
    acf_add_local_field_group([
        'key' => 'group_contact_cta_v2',
        'title' => 'Contact CTA V2',
        'fields' => [
            [
                'key' => 'field_cta2_eyebrow',
                'label' => 'Eyebrow',
                'name' => 'cta2_eyebrow',
                'type' => 'text',
            ],
            [
                'key' => 'field_cta2_title',
                'label' => 'Title',
                'name' => 'cta2_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_cta2_desc',
                'label' => 'Description',
                'name' => 'cta2_desc',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_cta2_button_text',
                'label' => 'Button Text',
                'name' => 'cta2_button_text',
                'type' => 'text',
                'default_value' => 'Contact us',
            ],
            [
                'key' => 'field_cta2_button_link',
                'label' => 'Button Link',
                'name' => 'cta2_button_link',
                'type' => 'url',
            ],
            [
                'key' => 'field_cta2_background_image',
                'label' => 'Background Image',
                'name' => 'cta2_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/contact-cta-v2']]],
    ]);

    // 21. Contact CTA V3 Block
    acf_add_local_field_group([
        'key' => 'group_contact_cta_v3',
        'title' => 'Contact CTA V3',
        'fields' => [
            [
                'key' => 'field_cta3_eyebrow',
                'label' => 'Eyebrow',
                'name' => 'cta3_eyebrow',
                'type' => 'text',
                'default_value' => "LET'S TALK",
            ],
            [
                'key' => 'field_cta3_title',
                'label' => 'Title',
                'name' => 'cta3_title',
                'type' => 'text',
            ],
            [
                'key' => 'field_cta3_desc',
                'label' => 'Description',
                'name' => 'cta3_desc',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_cta3_btn_text',
                'label' => 'Button Text',
                'name' => 'cta3_btn_text',
                'type' => 'text',
                'default_value' => 'Contact us',
            ],
            [
                'key' => 'field_cta3_btn_link',
                'label' => 'Button Link',
                'name' => 'cta3_btn_link',
                'type' => 'url',
            ],
            [
                'key' => 'field_cta3_background_image',
                'label' => 'Background Image',
                'name' => 'cta3_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],
            // Các trường cho form
            [
                'key' => 'field_cta3_form_shortcode',
                'label' => 'Form Shortcode',
                'name' => 'cta3_form_shortcode',
                'type' => 'text',
                'instructions' => 'Dán shortcode của form (Contact Form 7, WPForms, v.v.) hoặc để trống để dùng form mặc định.',
            ],
        ],
        'location' => [[['param' => 'block', 'operator' => '==', 'value' => 'acf/contact-cta-v3']]],
    ]);

endif;
