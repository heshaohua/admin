<?php
/**
 * Created by PhpStorm.
 * User: xuguoliang
 * Date: 2018/7/6
 * Time: 14:11
 */

return [
    'menu'=>[
        'data'=> ['label'=>'主页','items'=>[
                ['label' => '主页',
                    'items' => [
                        ['label' => '主页概览', 'url' => ['/site']]
                    ]
                ]
            ]
        ],
        'setting'=> ['label'=>'系统设置', 'items'=>[
                ['label' => '权限管理',
                    'items' => [
                        ['label' => '用户管理', 'url' => ['/admin/user']],
                        ['label' => '角色管理', 'url' => ['/admin/roles']],
                        ['label' => '权限列表', 'url' => ['/admin/permission']],
                        ['label' => '路由列表', 'url' => ['/admin/route']],
                        ['label' => '规则列表', 'url' => ['/admin/rule']]
                    ]
                ],
                ['label' => '个人中心',
                    'items' => [
                        ['label' => '修改密码', 'url' => ['/admin/personal/reset-password']],
                    ]
                ]
            ]
        ],
        'category'=>['label'=>'Category & Tags','items'=>[
                ['label'=>'Category',
                    'items' => [
                        ['label'=>'Category List','url'=>['/category/normal']]
                    ]
                ],
                ['label'=>'Category For Articles',
                    'items' => [
                        ['label'=>'Category List','url'=>['/category/article']]
                    ]
                ],
                ['label'=>'Tags',
                    'items' => [
                        ['label'=>'Tags List','url'=>['/tag/index']],
                        ['label'=>'Import CSV','url'=>['/tag/import']]
                    ]
                ]
            ]
        ],
        'article'=>['label'=>'Articles','items'=>[
                ['label'=>'Articles',
                    'items' => [
                        ['label'=>'Articles List','url'=>['/article/index']],
                        ['label'=>'Add Article','url'=>['/article/add']],
                        ['label'=>'Draft List','url'=>['/article/draft']],
                        ['label'=>'Review List','url'=>['/article/review']]
                    ]
                ]
            ]
        ],
        'theme'=>['label'=>'Themespack','items'=>[
                ['label'=>'Themespack',
                    'items' => [
                        ['label'=>'Themespack List ','url'=>['/theme/index']],
                        ['label'=>'Add Themespack','url'=>['/theme/add']],
                        ['label'=>'Draft List ','url'=>['/theme/draft']],
                        ['label'=>'Review List','url'=>['/theme/review']]
                    ]
                ]
            ]
        ],
        'wallpaper'=>['label'=>'Wallpapers','items'=>[
                ['label'=>'Wallpapers',
                    'items' => [
                        ['label'=>'Wallpapers List','url'=>['/wallpaper/index']],
                        ['label'=>'Add Wallpapers','url'=>['/wallpaper/add']],
                        ['label'=>'Draft List ','url'=>['/wallpaper/draft']],
                        ['label'=>'Review List','url'=>['/wallpaper/review']]
                    ]
                ]
            ]
        ],
        'collection'=>['label'=>'Wallpaper Collection','items'=>[
                ['label'=>'Wallpaper Collection',
                    'items' => [
                        ['label'=>'Collections List','url'=>['/collection/index']],
                        ['label'=>'Add Collections','url'=>['/collection/add']],
                        ['label'=>'Draft List ','url'=>['/collection/draft']],
                        ['label'=>'Review List','url'=>['/collection/review']]
                    ]
                ]
            ]
        ],
        'app'=>['label'=>'Theme Apps','items'=>[
                ['label'=>'Theme Apps',
                    'items' => [
                        ['label'=>'Apps List','url'=>['/app/index']],
                        ['label'=>'Add App','url'=>['/app/add']],
                        ['label'=>'Crawl App','url'=>['/app/crawl']],
                        ['label'=>'Draft List ','url'=>['/app/draft']],
                        ['label'=>'Review List','url'=>['/app/review']]
                    ]
                ]
            ]
        ]
    ]
];