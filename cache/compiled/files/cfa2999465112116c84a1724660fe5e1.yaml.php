<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Program Files (x86)/Ampps/www/d2/user/plugins/thumb-ratings/blueprints.yaml',
    'modified' => 1518921100,
    'data' => [
        'name' => 'Thumb Ratings',
        'version' => '0.1.0',
        'description' => 'Thumb Ratings plugin for GRAV!',
        'icon' => 'thumbs-o-up',
        'author' => [
            'name' => 'iusvar',
            'email' => 'severoiuliano@gmail.com',
            'url' => 'http://iusvar.hostfree.pw/'
        ],
        'homepage' => 'https://github.com/iusvar/grav-plugin-thumb-ratings',
        'demo' => 'http://iusvar.hostfree.pw/',
        'keywords' => 'grav, plugin, thumb-ratings',
        'bugs' => 'https://github.com/iusvar/grav-plugin-thumb-ratings/issues',
        'readme' => 'https://github.com/iusvar/grav-plugin-thumb-ratings/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'THUMBRATINGS_PLUGIN.USE_BUILT_IN_CSS',
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'callback' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'THUMBRATINGS_PLUGIN.CALLBACK_URL',
                    'help' => 'THUMBRATINGS_PLUGIN.CALLBACK_URL_HELP'
                ],
                'unique_ip_check' => [
                    'type' => 'toggle',
                    'label' => 'THUMBRATINGS_PLUGIN.UNIQUE_IP_CHECK',
                    'highlight' => 1,
                    'help' => 'THUMBRATINGS_PLUGIN.UNIQUE_IP_CHECK_HELP',
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'readonly' => [
                    'type' => 'toggle',
                    'label' => 'THUMBRATINGS_PLUGIN.READ_ONLY',
                    'help' => 'THUMBRATINGS_PLUGIN.READ_ONLY_HELP',
                    'highlight' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'disable_after_vote' => [
                    'type' => 'toggle',
                    'label' => 'THUMBRATINGS_PLUGIN.DISABLE_AFTER_VOTE',
                    'help' => 'THUMBRATINGS_PLUGIN.DISABLE_AFTER_VOTE_HELP',
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'up_bgcolor' => [
                    'type' => 'colorpicker',
                    'size' => 'medium',
                    'label' => 'THUMBRATINGS_PLUGIN.UP_BGCOLOR'
                ],
                'down_bgcolor' => [
                    'type' => 'colorpicker',
                    'size' => 'medium',
                    'label' => 'THUMBRATINGS_PLUGIN.DOWN_BGCOLOR'
                ],
                'up_color' => [
                    'type' => 'colorpicker',
                    'size' => 'medium',
                    'label' => 'THUMBRATINGS_PLUGIN.UP_COLOR'
                ],
                'down_color' => [
                    'type' => 'colorpicker',
                    'size' => 'medium',
                    'label' => 'THUMBRATINGS_PLUGIN.DOWN_COLOR'
                ]
            ]
        ]
    ]
];
