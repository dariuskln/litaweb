<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/litamua1/public_html/user/themes/photographer/blueprints.yaml',
    'modified' => 1567067171,
    'data' => [
        'name' => 'Photographer',
        'version' => '1.5.0',
        'description' => 'Photographer is a Bootstrap 3.0 theme for Grav. It\'s a port of Free Bootstrap 3.0 Template by template-help.com.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-photographer',
        'demo' => 'http://demo.getgrav.org/photographer-skeleton',
        'keywords' => 'photographer, theme, bootstrap, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-photographer/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'color' => [
                    'type' => 'text',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
