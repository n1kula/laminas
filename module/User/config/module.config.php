<?php

declare(strict_types=1);

namespace User;

use Laminas\Router\Http\Literal;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'signup' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/signup',
                    'defaults' => [
                        'controller' => Controller\RegisterController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\RegisterController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'register/index'    => __DIR__ . '/../view/register/user/index.phtml',

        ],
        'template_path_stack' => [
            'user' => __DIR__ . '/../view',
        ],
    ],
];
