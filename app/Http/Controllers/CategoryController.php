<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        Category::create(request(['title','slug']));
        return redirect('/categories');
    }

    public function show($category_slug){
        $categories = Category::query()
            ->select('title')
            ->where('slug', '=', $category_slug)
            ->get();

        if(count($categories) == 0) return abort(404);


        $posts = Category::query()
            ->leftJoin('posts','posts.category_id','=','categories.id')
            ->select(
                'posts.title AS title',
                'categories.title AS cat_title',
                'posts.text',
                'posts.slug AS slug',
                'categories.slug AS cat_slug',
                'posts.user_id',
                'posts.id'
            )
            ->where('categories.slug', '=', $category_slug)
            ->orderBy('posts.updated_at')
            ->limit(5)
            ->get();

        $data = array(
            'page' => 'category',
            'categories' => Category::all(),
            'posts' => $posts
        );
        return view('categories.category')->with('data', $data);
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $category->update(request(['title','slug',]));

        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        Post::where('category_id', '=', $category->id)->delete();
        $category->delete();

        return redirect('/posts');
    }
}
