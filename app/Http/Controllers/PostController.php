<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'tags'])
            ->where('is_published', true)
            ->latest()
            ->take(4)
            ->get();

        return view('home', compact('posts'));
    }
    public function show($slug)
    {
        $post = Post::with(['category', 'tags'])
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->take(4)
            ->get();

        return view('posts.show', compact('post', 'relatedPosts'));
    }
    public function allPosts()
    {
        $posts = Post::with(['category', 'tags'])
            ->where('is_published', true)
            ->latest()
            ->get();

        return view('posts.all', compact('posts'));
    }
}
