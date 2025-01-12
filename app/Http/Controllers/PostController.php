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
            ->take(10)
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

        return view('post.show', compact('post', 'relatedPosts'));
    }
}
