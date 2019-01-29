<?php

namespace App\Http\Controllers\Berita;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;

class BeritaController extends Controller
{
    public function index()
    {
        $posts  = new Post;
        $posts  = $posts->orderBy('created_at', 'desc')->with('category')->paginate(10);
        $posts  = $posts->toArray();

        // dd($posts);

        return view('berita.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = new Post;
        $post = $post->where('slug', $slug)->with('category')->first();
        $post = $post->toArray();

        // dd($post);

        return view('berita.show', compact('post'));
    }
}
