<?php

declare(strict_types=1);

return [
    'consumers' => [
        [
            'name' => 'UserService',
            'service' => \App\JsonRpc\UserServiceInterface::class,
            'registry' => [
                'protocol' => 'consul',
                'address' => 'http://consul:8500',
            ],

        ],
        [
            'name' => 'OrderService',
            'service' => \App\JsonRpc\OrderServiceInterface::class,
            'registry' => [
                'protocol' => 'consul',
                'address' => 'http://consul:8500',
            ],

        ]
    ],
];