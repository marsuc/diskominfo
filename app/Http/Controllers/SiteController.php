<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;
use TCG\Voyager\Models\Post;

class SiteController extends Controller
{
    public function home()
    {
        // $images = Galery::orderBy('created_at', 'desc')->take(5)->get();
        $images = new Galery;
        $images = $images->orderBy('created_at', 'desc')->take(5)->get();
        $images = $images->toArray();

        // $posts  = Post::orderBy('created_at', 'desc')->with('category')->take(5)->get();
        $posts  = new Post;
        $posts  = $posts->orderBy('created_at', 'desc')->with('category')->take(5)->get();
        $posts  = $posts->toArray();

        // dd($posts);

        return view('beranda.index', compact('images', 'posts'));
    }

    public function kontak()
    {
        return view('kontak.index');
    }
}