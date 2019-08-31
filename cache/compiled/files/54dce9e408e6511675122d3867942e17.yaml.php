<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/litamua1/public_html/user/config/site.yaml',
    'modified' => 1567071780,
    'data' => [
        'title' => 'Litamua - enhance your natural beauty',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Lita MUA',
            'email' => 'info@litamua.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Menerima Makeup Artist, Wedding Makeup, Makeup Party, Makeup Wisuda, Makeup Sweet 17'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'email' => 'your-email@domain.com',
        'description' => 'Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.',
        'social' => [
            0 => [
                'url' => '#',
                'icon' => 'facebook.png'
            ],
            1 => [
                'url' => '#',
                'icon' => 'gplus.png'
            ],
            2 => [
                'url' => '#',
                'icon' => 'twitter.png'
            ],
            3 => [
                'url' => '#',
                'icon' => 'rss.png'
            ]
        ],
        'copyright' => [
            'line1' => 'Untitled',
            'line2' => 'Design:',
            'url' => 'http://html5up.net',
            'url_label' => 'HTML5 UP'
        ],
        'logo' => [
            'text1' => 'Photographer',
            'text2' => 'by HTML5 UP'
        ],
        'menu' => [
            0 => [
                'text' => 'submenu',
                'submenu' => [
                    0 => [
                        'text' => 'info',
                        'link' => '#'
                    ],
                    1 => [
                        'text' => 'profile',
                        'link' => '#'
                    ],
                    2 => [
                        'text' => 'news',
                        'link' => '#',
                        'submenu' => [
                            0 => [
                                'text' => 'fresh',
                                'link' => '#'
                            ],
                            1 => [
                                'text' => 'archive',
                                'link' => '#'
                            ]
                        ]
                    ]
                ],
                'link' => '#'
            ]
        ]
    ]
];
