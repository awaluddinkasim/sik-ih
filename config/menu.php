<?php

return [
    [
        'active-segment' => 'dashboard',
        'label' => 'Dashboard',
        'route' => 'dashboard',
        'icon' => 'chart-line',
    ],
    [
        'active-segment' => 'users',
        'label' => 'Artikel Kehamilan',
        'route' => 'article.index',
        'icon' => 'file',
    ],
    [
        'active-segment' => 'users',
        'label' => 'Pengguna',
        'submenu' => [
            [
                'active-segment' => 'hasil',
                'label' => 'Daftar Pengguna',
                'route' => 'user.list',
            ],
            [
                'active-segment' => 'hasil',
                'label' => 'Data Kehamilan',
                'route' => 'user.pregnancy',
            ],
        ],
        'icon' => 'user',
    ],
    [
        'active-segment' => 'users',
        'label' => 'Data Konsultasi',
        'route' => 'appointment.index',
        'icon' => 'calendar-alt',
    ],
    [
        'active-segment' => 'checkups',
        'label' => 'Hasil Pemeriksaan',
        'route' => 'checkup.index',
        'icon' => 'clipboard',
    ],
];
