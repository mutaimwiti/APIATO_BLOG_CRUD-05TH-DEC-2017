<?php

// API Root route
$router->get('/', [
    'as'   => 'api_welcome_root_page',
    'uses' => 'AdminController@apiRoot',
]);
