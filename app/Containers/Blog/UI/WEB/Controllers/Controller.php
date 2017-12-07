<?php

namespace App\Containers\Blog\UI\WEB\Controllers;

use App\Containers\Blog\UI\WEB\Requests\CreateBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\DeleteBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\GetAllBlogsRequest;
use App\Containers\Blog\UI\WEB\Requests\FindBlogByIdRequest;
use App\Containers\Blog\UI\WEB\Requests\UpdateBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\StoreBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\EditBlogRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

class Controller extends WebController
{
    public function myBlogs(GetAllBlogsRequest $request)
    {
        $blogs = Apiato::call('Blog@GetMyBlogsAction', [$request]);

        return view('blog::my_blogs', compact('blogs'));
    }

    public function index(GetAllBlogsRequest $request)
    {
        $blogs = Apiato::call('Blog@GetAllBlogsAction', [$request]);

        return view('blog::index', compact('blogs'));
    }

    public function show(FindBlogByIdRequest $request)
    {
        $blog = Apiato::call('Blog@FindBlogByIdAction', [$request]);

        return view('blog::show', compact('blog'));
    }

    public function create(CreateBlogRequest $request)
    {
        return view('blog::create');
    }

    public function store(StoreBlogRequest $request)
    {
        $blog = Apiato::call('Blog@CreateBlogAction', [$request]);

        return redirect()->route('web_blog_create')->with('success', true);
    }

    public function edit(EditBlogRequest $request)
    {
        $blog = Apiato::call('Blog@FindBlogByIdAction', [$request]);

        return view('blog::edit', compact('blog'));
    }

    public function update(UpdateBlogRequest $request)
    {
        $blog = Apiato::call('Blog@UpdateBlogAction', [$request]);

        return redirect()->route('web_blog_edit', compact('blog'))->with('success', true);
    }

    public function delete(DeleteBlogRequest $request)
    {
         $result = Apiato::call('Blog@DeleteBlogAction', [$request]);

        return redirect()->route('web_blog_index')->with('deleted', $result);
    }
}
