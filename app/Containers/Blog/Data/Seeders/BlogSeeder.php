<?php

namespace App\Containers\Blog\Data\Seeders;

use App\Containers\Blog\Models\Blog;
use App\Containers\User\Models\User;
use App\Ship\Parents\Seeders\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 10)->create()->each(function ($user){
            foreach(range(1,5) as $i){
                $user->blogs()->save(factory(Blog::class)->make());
            }
        });
    }
}
