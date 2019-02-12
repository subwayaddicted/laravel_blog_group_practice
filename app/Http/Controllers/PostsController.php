<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all(array('id','title'));

        // todo #view Добавить реального юзера
        // $cur_user = Auth::user()
        $cur_user = new User();
        $cur_user->id = 1;

        return view('posts.create')->withCategories($categories)->with('user', $cur_user);
    }

    public function store()
    {
        Post::create(request(['title','slug','text','user_id','category_id']));
        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all(array('id','title'));

        return view('posts.edit', compact('post'))->withCategories($categories);
    }
    public function update(Post $post)
    {
        $post->update(request(['title','text','slug','category_id']));

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }
}
