<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::all();
        return view('main', compact('categories'));
    }

    public function category($slug)
    {

        $categories = Category::all()->where('slug',$slug)->first();
        return view('category', compact('categories'));

    }
    public function categories()
    {
        return view('categories', ['categories' => Category::get()]);
    }
    public function more($slug)
    {
        $posts = Post::all()->where('slug', $slug)->first();
        return view('post', compact('posts'));
    }

}
