<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'apps' => [
        [
            'name' => 'Setup',
            'slug' => 'setup',
            'icon' => 'codepen',
            'theme' => [
                'type' => 'light',
                'nav_bar' => 'admin_top', //admin_top, admin_side, top, side, hidden, minified_top, minified_side
                //admin_side, side, minified_side
                'breadcrumb' => true, //top, hidden
                'centered_layout' => false,
            ],
            'top_nav' => [
                'global' => [
                    'user_dropdown' => []
                ],
                'local' => [
                    'user_dropdown' => []
                ]
            ],
            'logo' => 'codepen.png',
            "department" => "IT, Infrastructure",
            'group' => ['admin', 'serice_engineer'],
            'description' => 'Vente Force is a CRM application.',
            'menu' => [
                [
                    "label" => "Dashboard",
                    "slug" => "dashboard",
                    "icon" => "pie-chart",
                    "permission" => [],
                    "hidden_links" => []
                ],
                ...config('module-user.menu_items', []),
                ...config('module-object.menu_items', []),
                ...config('module-currency.menu_items', []),
                ...config('module-org.menu_items', []),
            ],
            'interactions' => [
                [
                    "slug" => "dashboard",
                    'title' => 'Dashboard',
                    'subtitle' => '',
                    'icon' => 'pie-chart',
                    "schema" => [
                        'breadcrumbs' => [
                            [
                                'label' => 'Dashboard',
                                'slug' => 'dashboard',
                                'icon' => 'pie-chart'
                            ]
                        ],
                        'header_actions' => [],
                        'filters' => [],
                        'elements' => [
                            [
                                'type' => 'row',
                                'width' => [
                                    'xxxs' => 12,
                                    'xxs' => 12,
                                    'xs' => 12,
                                    'sm' => 12,
                                    'md' => 12,
                                    'lg' => 12,
                                    'xl' => 12,
                                    'xxl' => 12,
                                    'xxxl' => 12,
                                ],
                                'elements' => [
                                    [
                                        ...config('module-user.charts.stats.total_users'),
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 6,
                                            'lg' => 4,
                                            'xl' => 4,
                                            'xxl' => 3,
                                            'xxxl' => 2,
                                        ]
                                    ],
                                    [
                                        ...config('module-user.charts.stats.total_sessions'),
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 6,
                                            'lg' => 4,
                                            'xl' => 4,
                                            'xxl' => 3,
                                            'xxxl' => 2,
                                        ]
                                    ],
                                    [
                                        ...config('module-object.charts.stats.total_objects'),
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 6,
                                            'lg' => 4,
                                            'xl' => 4,
                                            'xxl' => 3,
                                            'xxxl' => 2,
                                        ]
                                    ],
                                    [
                                        ...config('module-user.charts.stats.new_users'),
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 6,
                                            'lg' => 4,
                                            'xl' => 4,
                                            'xxl' => 3,
                                            'xxxl' => 2,
                                        ]
                                    ],
                                    [
                                        ...config('module-object.charts.stats.records_count'),
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 6,
                                            'lg' => 4,
                                            'xl' => 4,
                                            'xxl' => 6,
                                            'xxxl' => 2,
                                        ]
                                    ],
                                    [
                                        ...config('module-object.charts.stats.size_in_mb'),
                                        'width' => [
                                            'xxxs' => 12,
                                            'xxs' => 12,
                                            'xs' => 12,
                                            'sm' => 12,
                                            'md' => 6,
                                            'lg' => 4,
                                            'xl' => 4,
                                            'xxl' => 6,
                                            'xxxl' => 2,
                                        ]
                                    ],
                                ]
                            ],
                        ],
                    ]
                ],
                ...config('module-user.interactions', []),
                ...config('module-object.interactions', []),
                ...config('module-currency.interactions', []),
                ...config('module-org.interactions', []),
            ]
        ],
    ]
];