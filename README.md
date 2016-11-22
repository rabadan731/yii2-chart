common:
'components' => [
    ...
    'authManager' => [
         'class' => 'yii\rbac\DbManager'
     ],
    ...
],



backend:
'modules' => [
    ...
    'users' => [
        'class' => 'rabadan731\user\Module',
        'isBackend' => true
    ],
    ...
]
'components' => [
    ...
    'user' => [
        'class' => 'rabadan731\user\components\User',
        'identityClass' => 'rabadan731\user\models\backend\Users',
        'enableAutoLogin' => true,
        'loginUrl' => '/login',
    ],
    ...
]


frontend:
'modules' => [
    ...
    'users' => [
        'class' => 'rabadan731\user\Module',
    ],
],
'components' => [
    ...
    'user' => [
        'class' => 'rabadan731\user\components\User',
        'identityClass' => 'rabadan731\user\models\frontend\Users',
        'enableAutoLogin' => true,
        'loginUrl' => ['/users/guest/login'],
    ],
    ...
],