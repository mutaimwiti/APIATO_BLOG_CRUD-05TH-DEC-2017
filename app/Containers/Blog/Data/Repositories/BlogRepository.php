<?php

namespace App\Containers\Blog\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BlogRepository
 */
class BlogRepository extends Repository
{

    /**
     * The Container Name.
	 * Must be set when the model has a different name than the container
	 */
    protected $container = 'Blog';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
