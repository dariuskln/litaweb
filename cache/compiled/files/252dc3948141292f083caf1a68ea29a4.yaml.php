<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/litamua1/public_html/user/plugins/ganalytics/blueprints.yaml',
    'modified' => 1567136767,
    'data' => [
        'name' => 'Google Analytics',
        'version' => '1.4.0',
        'description' => 'Easily integrate and configure Google Analytics without the need to touch any code within your Grav site.',
        'icon' => 'google',
        'author' => [
            'name' => 'John Linhart',
            'email' => 'admin@escope.cz',
            'url' => 'http://johnlinhart.com'
        ],
        'homepage' => 'https://github.com/escopecz/grav-ganalytics',
        'keywords' => 'google, plugin, tracking, analytics, grav',
        'bugs' => 'https://github.com/escopecz/grav-ganalytics/issues',
        'docs' => 'https://github.com/escopecz/grav-ganalytics/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'configuration' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_GANALYTICS.SECTION_CONFIGURATION',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.PLUGIN_STATUS',
                                    'hightlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS.ENABLED',
                                        0 => 'PLUGIN_GANALYTICS.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'trackingId' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_GANALYTICS.TACKING_ID',
                                    'help' => 'PLUGIN_GANALYTICS.TACKING_ID_HELP',
                                    'placeholder' => 'UA-00000000-0',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'advanced' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_GANALYTICS.SECTION_ADVANCED',
                                    'underline' => true,
                                    'fields' => [
                                        'position' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_GANALYTICS.POSITION',
                                            'help' => 'PLUGIN_GANALYTICS.POSITION_HELP',
                                            'hightlight' => 1,
                                            'default' => 'head',
                                            'options' => [
                                                'head' => 'PLUGIN_GANALYTICS.POSITION_HEAD',
                                                'body' => 'PLUGIN_GANALYTICS.POSITION_BODY'
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'objectName' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_GANALYTICS.OBJECT_NAME',
                                            'help' => 'PLUGIN_GANALYTICS.OBJECT_NAME_HELP',
                                            'size' => 'small',
                                            'default' => 'ga'
                                        ],
                                        'async' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_GANALYTICS.ASYNC',
                                            'help' => 'PLUGIN_GANALYTICS.ASYNC_HELP',
                                            'hightlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_GANALYTICS._YES',
                                                0 => 'PLUGIN_GANALYTICS._NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'forceSsl' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_GANALYTICS.FORCE_SSL',
                                            'help' => 'PLUGIN_GANALYTICS.FORCE_SSL_HELP',
                                            'hightlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_GANALYTICS._YES',
                                                0 => 'PLUGIN_GANALYTICS._NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'anonymizeIp' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_GANALYTICS.ANONYMIZE_IP',
                                            'help' => 'PLUGIN_GANALYTICS.ANONYMIZE_IP_HELP',
                                            'hightlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_GANALYTICS._YES',
                                                0 => 'PLUGIN_GANALYTICS._NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'blockedIps' => [
                                            'type' => 'array',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_GANALYTICS.BLOCKED_IPS',
                                            'help' => 'PLUGIN_GANALYTICS.BLOCKED_IPS_HELP',
                                            'value_only' => true
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'cookie' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_GANALYTICS.SECTION_COOKIE',
                            'fields' => [
                                'cookieConfig' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_CONFIG',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_CONFIG_HELP',
                                    'hightlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS._YES',
                                        0 => 'PLUGIN_GANALYTICS._NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cookieName' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_NAME',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_NAME_HELP',
                                    'size' => 'small',
                                    'default' => '_ga'
                                ],
                                'cookieDomain' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_DOMAIN',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_DOMAIN_HELP',
                                    'size' => 'medium'
                                ],
                                'cookieExpires' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_EXPIRES',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_EXPIRES_HELP',
                                    'append' => 'PLUGIN_GANALYTICS.SECONDS',
                                    'default' => 63072000,
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ]
                            ]
                        ],
                        'debug' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_GANALYTICS.SECTION_DEBUG',
                            'fields' => [
                                'debugStatus' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.DEBUG_STATUS',
                                    'help' => 'PLUGIN_GANALYTICS.DEBUG_STATUS_HELP',
                                    'hightlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS.ENABLED',
                                        0 => 'PLUGIN_GANALYTICS.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'debugTrace' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.DEBUG_TRACE',
                                    'help' => 'PLUGIN_GANALYTICS.DEBUG_TRACE_HELP',
                                    'hightlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS.ENABLED',
                                        0 => 'PLUGIN_GANALYTICS.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
