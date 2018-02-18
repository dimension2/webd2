<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Program Files (x86)/Ampps/www/d2/user/themes/agastya/blueprints.yaml',
    'modified' => 1491354428,
    'data' => [
        'name' => 'Agastya',
        'version' => '1.0.1',
        'description' => 'Agastya is a custom theme built for **Grav** by dimension2.',
        'icon' => 'unknown',
        'author' => [
            'name' => 'dimension2',
            'email' => 'dimension2@live.com',
            'url' => 'http://dimension2.in'
        ],
        'keywords' => 'dimension2, theme, modern, minimalist, fast, responsive, india, indology, data stories, photography, street photography, data visualization, governance, civic technology',
        'form' => [
            'validation' => 'strict',
            'favicon' => [
                'type' => 'filepicker',
                'folder' => 'theme@:/img',
                'preview_images' => true,
                'accept' => [
                    0 => '.png',
                    1 => '.jpg'
                ],
                'label' => 'THEME_AGASTYA.ADMIN.FAVICON.label'
            ]
        ]
    ]
];
