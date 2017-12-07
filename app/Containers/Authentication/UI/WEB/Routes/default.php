<?php

/** @var Route $router */
$router->get('/', [
    'as' => 'get_home_page',
    'uses'  => 'DefaultController@viewHomePage',
    'domain' => parse_url(\Config::get('app.url'))['host'],
]);

$router->get('/login', [
    'as'   => 'get_login_page',
    'uses' => 'DefaultController@showLoginPage',
    'domain' => parse_url(\Config::get('app.url'))['host'],
]);

$router->post('/login', [
    'as'   => 'post_login_form',
    'uses' => 'DefaultController@login',
    'domain' => parse_url(\Config::get('app.url'))['host'],
]);

$router->post('/logout', [
    'as'   => 'post_logout_form',
    'uses' => 'DefaultController@logout',
    'domain' => parse_url(\Config::get('app.url'))['host'],
]);

$router->get('/register', [
    'as'   => 'get_register_page',
    'uses' => 'DefaultController@showRegisterPage',
    'domain' => parse_url(\Config::get('app.url'))['host'],
]);

$router->post('/register', [
    'as'   => 'post_register_form',
    'uses' => 'DefaultController@register',
    'domain' => parse_url(\Config::get('app.url'))['host'],
]);

