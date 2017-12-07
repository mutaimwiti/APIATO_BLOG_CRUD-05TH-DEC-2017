<?php

/** @var Route $router */
$router->get('/', [
    'as'   => 'get_admin_home_page',
    'uses' => 'AdminController@showLoginPage',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
]);

$router->get('/login', [
    'as'   => 'get_admin_login_page',
    'uses' => 'AdminController@showLoginPage',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
]);

$router->post('/login', [
    'as'   => 'post_admin_login_form',
    'uses' => 'AdminController@loginAdmin',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
]);

$router->post('/logout', [
    'as'   => 'post_admin_logout_form',
    'uses' => 'AdminController@logoutAdmin',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
]);

$router->get('/dashboard', [
    'as'   => 'get_admin_dashboard_page',
    'uses'       => 'AdminController@viewDashboardPage',
    'domain' => 'admin.'. parse_url(\Config::get('app.url'))['host'],
    'middleware' => [
        'auth:web'
    ],
]);

