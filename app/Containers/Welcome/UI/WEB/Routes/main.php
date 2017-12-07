<?php

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'AdminController@sayWelcome',
]);
