<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Program Files (x86)/Ampps/www/d2/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1518921100,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'display_button' => false,
        'min_query_length' => 3,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filter_combinator' => 'and',
        'filters' => [
            'category' => 'blog'
        ],
        'ignore_accented_characters' => false,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
