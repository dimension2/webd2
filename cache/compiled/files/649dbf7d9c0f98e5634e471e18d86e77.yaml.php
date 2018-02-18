<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Program Files (x86)/Ampps/www/d2/user/themes/clean/blueprints.yaml',
    'modified' => 1486686746,
    'data' => [
        'name' => 'Clean Blog',
        'description' => 'Grav theme based on Clean Blog HTML template of Start Bootstrap.',
        'version' => '1.2.0',
        'icon' => 'edit',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'hungtran@peaceofmindwebsite.com',
            'url' => 'http://www.peaceofmindwebsite.com'
        ],
        'homepage' => 'https://github.com/tranduyhung/grav-theme-clean-blog',
        'demo' => 'http://www.peaceofmindwebsite.com/skeletons/clean-blog',
        'keywords' => 'theme, template, bootstrap, clean, blog, responsive, html5',
        'bugs' => 'https://github.com/tranduyhung/grav-theme-clean-blog/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => NULL,
            'copyright' => [
                'type' => 'textarea',
                'label' => 'THEME_CLEAN_BLOG.ADMIN.COPYRIGHT.LABEL',
                'help' => 'THEME_CLEAN_BLOG.ADMIN.COPYRIGHT.HELP'
            ],
            'favicon' => [
                'type' => 'filepicker',
                'folder' => 'theme@:/img',
                'preview_images' => true,
                'acccept' => [
                    0 => '.png',
                    1 => '.jpg'
                ],
                'label' => 'THEME_CLEAN_BLOG.ADMIN.FAVICON.LABEL',
                'help' => 'THEME_CLEAN_BLOG.ADMIN.FAVICON.HELP'
            ],
            'default_header_image' => [
                'type' => 'filepicker',
                'folder' => 'theme@:/img',
                'preview_images' => true,
                'acccept' => [
                    0 => '.png',
                    1 => '.jpg'
                ],
                'label' => 'THEME_CLEAN_BLOG.ADMIN.DEFAULT_HEADER_IMAGE.LABEL',
                'help' => 'THEME_CLEAN_BLOG.ADMIN.DEFAULT_HEADER_IMAGE.HELP'
            ],
            'error_header_image' => [
                'type' => 'filepicker',
                'folder' => 'theme@:/img',
                'preview_images' => true,
                'acccept' => [
                    0 => '.png',
                    1 => '.jpg'
                ],
                'label' => 'THEME_CLEAN_BLOG.ADMIN.ERROR_HEADER_IMAGE.LABEL',
                'help' => 'THEME_CLEAN_BLOG.ADMIN.ERROR_HEADER_IMAGE.HELP'
            ],
            'social_icons' => [
                'type' => 'list',
                'label' => 'THEME_CLEAN_BLOG.ADMIN.SOCIAL_ICONS.LABEL',
                'help' => 'THEME_CLEAN_BLOG.ADMIN.SOCIAL_ICONS.HELP',
                'fields' => [
                    '.icon' => [
                        'type' => 'text',
                        'label' => 'THEME_CLEAN_BLOG.ADMIN.SOCIAL_ICONS.FIELDS.ICON.LABEL',
                        'help' => 'THEME_CLEAN_BLOG.ADMIN.SOCIAL_ICONS.FIELDS.ICON.HELP'
                    ],
                    '.url' => [
                        'type' => 'text',
                        'label' => 'THEME_CLEAN_BLOG.ADMIN.SOCIAL_ICONS.FIELDS.URL.LABEL',
                        'help' => 'THEME_CLEAN_BLOG.ADMIN.SOCIAL_ICONS.FIELDS.URL.HELP'
                    ]
                ]
            ]
        ]
    ]
];
