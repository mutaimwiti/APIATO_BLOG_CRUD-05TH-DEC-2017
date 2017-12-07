<?php

$router->get('/user', [
    'as'   => 'get_user_home_page',
    'uses' => 'AdminController@sayWelcome',
]);
