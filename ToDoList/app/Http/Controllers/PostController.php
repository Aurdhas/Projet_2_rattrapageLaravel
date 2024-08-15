<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view(
            'auth.dashboard',
            ['posts' => $posts, 'users' => $users, 'posts' => DB::table('posts')->paginate(1)]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            
        ]);

        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post=Post::find($id);
        return View::make('posts.show')
            ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),

        ]);
        $users = User::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view(
            'auth.dashboard',
            ['posts' => $posts, 'users' => $users]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $users = User::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view(
            'auth.dashboard',
            ['posts' => $posts, 'users' => $users]
        );
    }
}
