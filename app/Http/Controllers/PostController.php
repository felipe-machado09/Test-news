<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = new Posts([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);
        $post->save();

        $post->category()->attach($request->get('categories'));

        return redirect('/posts')->with('success', 'Post saved!');
    }

    public function edit($id)
    {
        $categories = Category::pluck('name', 'id');
        $post = Posts::find($id);

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Posts::find($id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        dd($request->get('categories'));
        $post->category()->sync($request->get('categories'));

        return redirect('/posts')->with('success', 'Post updated!');
    }

    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted!');
    }
}
