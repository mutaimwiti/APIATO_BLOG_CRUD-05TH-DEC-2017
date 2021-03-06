<?php

namespace App\Containers\Blog\Data\Repositories;

use App\Containers\Blog\Models\Blog;
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

    public function myBlogs()
    {
        return Blog::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(10);
    }

    public function allBlogs()
    {
        return Blog::orderBy('created_at', 'desc')->paginate(10);
    }
}
