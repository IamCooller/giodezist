<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'О нас',
        'icon' => 'fa-solid fa-people-group',
        'priority' =>'10000',
        'pages' => [
            (new Page(\App\Models\About::class))
                ->setIcon('fa-solid fa-building')
                ->setPriority(0)
                ->setTitle('О компании'),
            (new Page(\App\Models\Tasks::class))
                ->setIcon('fa-solid fa-list-check')
                ->setPriority(100)
                ->setTitle('Задачи'),
                (new Page(\App\Models\Structure::class))
                ->setIcon('fa-solid fa-id-badge')
                ->setPriority(100)
                ->setTitle('Структура'),
                (new Page(\App\Models\Departaments::class))
                ->setIcon('fas fa-people-arrows')
                ->setPriority(100)
                ->setTitle('Отделы'),
                (new Page(\App\Models\License::class))
                ->setIcon('fa-solid fa-file-circle-check')
                ->setPriority(100)
                ->setTitle('Лицензии'),
                [
                    'title' => 'Документация',
                    'icon' => 'fa-solid fa-people-group',
                    'priority' =>'10000',
                    'pages' => [
                        (new Page(\App\Models\Documents::class))
                        ->setIcon('fa-solid fa-file-contract')
                        ->setPriority(100)
                        ->setTitle('Документы'),
                        (new Page(\App\Models\TabDocuments::class))
                        ->setIcon('fa-solid fa-plus')
                        ->setPriority(100)
                        ->setTitle('Табы документов'),
                    ],
                ],
                (new Page(\App\Models\Vacancy::class))
                ->setIcon('fa-solid fa-people-carry-box')
                ->setPriority(100)
                ->setTitle('Вакансии'),
        ]
            ],
    [
        'title' => 'Пресс-центр',
        'icon' => 'fa-brands fa-wpressr',
        'priority' =>'10000',
        'pages' => [
            (new Page(\App\Models\News::class))
                ->setIcon('fa-solid fa-newspaper')
                ->setPriority(0)
                ->setTitle('Новости'),
            (new Page(\App\Models\Photos::class))
                ->setIcon('fa-solid fa-camera')
                ->setPriority(100)
                ->setTitle('Фотогалерея'),
                (new Page(\App\Models\Videos::class))
                ->setIcon('fa-solid fa-video')
                ->setPriority(100)
                ->setTitle('Видеогалерея'),
        ]
            ],
    [
        'title' => 'Услуги',
        'icon' => 'fa-solid fa-bell-concierge',
        'priority' =>'10000',
        'pages' => [
            (new Page(\App\Models\Services::class))
                ->setIcon('fa-solid fa-bus')
                ->setPriority(0)
                ->setTitle('Главные услуги'),
            (new Page(\App\Models\ServicesSingle::class))
                ->setIcon('fa-solid fa-laptop-file')
                ->setPriority(100)
                ->setTitle('Услуги'),
        ]
            ],
    [
        'title' => 'Разрешения',
        'icon' => 'fa fa-american-sign-language-interpreting',
        'priority' =>'10000',
        'pages' => [
            (new Page(\App\User::class))
                ->setIcon('fa fa-user')
                ->setPriority(0)
                ->setTitle('Пользователи')
                ->setAccessLogic(function (Page $page) {
                    return auth()->user()->isSuperAdmin();
                }),
            (new Page(\App\Role::class))
                ->setIcon('fa fa-group')
                ->setPriority(100)
                ->setTitle('Права'),
        ]
            ],
    [
        'title' => 'Dashboard',
        'icon'  => 'fas fa-tachometer-alt',
        'url'   => route('admin.dashboard'),
        'priority' =>'100000000000000000',
    ],

    [
        'title' => 'Information',
        'icon'  => 'fas fa-info-circle',
        'url'   => route('admin.information'),
        'priority' =>'100000000000000000',
    ],

    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fas fa-users')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
];


