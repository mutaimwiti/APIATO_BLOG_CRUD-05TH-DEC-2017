<?php

/** @var Route $router */
$router->get('blogs/create', [
    'as' => 'web_blog_create',
    'uses'  => 'Controller@create',
    'middleware' => [
        'auth:web',
    ],
]);

$router->delete('blogs/{id}', [
    'as' => 'web_blog_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
        'auth:web',
    ],
]);

$router->get('blogs/{id}/edit', [
    'as' => 'web_blog_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
        'auth:web',
    ],
]);

$router->get('blogs/{id}', [
    'as' => 'web_blog_show',
    'uses'  => 'Controller@show',
    'middleware' => [
        //'auth:web',
    ],
]);

$router->get('my-blogs', [
    'as' => 'web_my_blogs',
    'uses'  => 'Controller@myBlogs',
    'middleware' => [
        'auth:web',
    ],
]);

$router->get('blogs', [
    'as' => 'web_blog_index',
    'uses'  => 'Controller@index',
    'middleware' => [
        //'auth:web',
    ],
]);

$router->post('blogs/store', [
    'as' => 'web_blog_store',
    'uses'  => 'Controller@store',
    'middleware' => [
        'auth:web',
    ],
]);

$router->patch('blogs/{id}', [
    'as' => 'web_blog_update',
    'uses'  => 'Controller@update',
    'middleware' => [
        'auth:web',
    ],
]);
