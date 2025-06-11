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
                'key' => 'field_cta_background',
                'label' => 'Background Image',
                'name' => 'cta_background',
                'type' => 'image',
                'return_format' => 'array',
            ],
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

endif;
