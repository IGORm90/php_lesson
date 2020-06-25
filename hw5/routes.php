<?php

    return [
        [
            'test' => '/^\/?$/',
            'controller' => 'all'
        ],
        [
            'test' => '/^add\/?$/',
            'controller' => 'add'
        ],
        [
            'test' => '/^contacts\/?$/',
            'controller' => 'contacts'
        ],
        [
            'test' => '/^article\/([1-9]+\d*)\/?$/',
            'controller' => 'article',
            'params' => ['id' => 1],
        ],
        [
            'test' => '/^category\/([1-9]+\d*)\/?$/',
            'controller' => 'category',
            'params' => ['id' => 1],
        ],
        [
            'test' => '/^delete\/([1-9]+\d*)\/?$/',
            'controller' => 'delete',
            'params' => ['id' => 1],
        ],
        [
            'test' => '/^edit\/([1-9]+\d*)\/?$/',
            'controller' => 'edit',
            'params' => ['id' => 1],
        ],
        [
            'test' => '/^auth\/login\/?$/',
            'controller' => 'auth/login',
        ],
        [
            'test' => '/^auth\/logout\/?$/',
            'controller' => 'auth/logout',
        ],
        [
            'test' => '/^auth\/registr\/?$/',
            'controller' => 'auth/registr',
        ],
        
    ];

?>