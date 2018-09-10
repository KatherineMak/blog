<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'name' => 'Kate\'s Blog',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
		],
    ],
];
