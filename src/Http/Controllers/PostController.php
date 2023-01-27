<?php

namespace Fantata\LaravelSimpleBlog\Http\Controllers;

use Fantata\LaravelSimpleBlog\Models\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('fantata::posts.index', compact('posts'));
    }

    public function show()
    {
        $post = Post::findOrFail(request('post'));

        return view('fantata::posts.show', compact('post'));
    }

    public function add()
    {
        return view('fantata::posts.add');
    }

    public function edit()
    {
        $post = Post::findOrFail(request('post'));

        return view('fantata::posts.add', compact('post'));
    }

    public function delete()
    {
        $post = Post::findOrFail(request('post'));
        $post->delete();

        // redirect
    }

    public function store()
    {

        if (! auth()->check()) {
            abort (403, 'Only authenticated users can create new posts.');
        }

        request()->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        // Assume the authenticated user is the post's author
        $author = auth()->user();

        $post = $author->posts()->create([
            'title'     => request('title'),
            'body'      => request('body'),
        ]);

        return redirect(route('posts.show', $post));
    }
}
