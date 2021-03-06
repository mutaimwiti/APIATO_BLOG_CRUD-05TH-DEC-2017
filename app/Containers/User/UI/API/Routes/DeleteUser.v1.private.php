<?php

/**
 * @apiGroup           Users
 * @apiName            deleteUser
 * @api                {delete} /v1/users/:id Delete User (admin, client..)
 * @apiDescription     Delete Users of any type (Admin, Client,...)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 OK
{
    "message": "User (4) Deleted Successfully."
}
 */

$router->delete('users/{id}', [
    'as' => 'api_user_delete_user',
    'uses'       => 'AdminController@deleteUser',
    'middleware' => [
        'auth:api',
    ],
]);
