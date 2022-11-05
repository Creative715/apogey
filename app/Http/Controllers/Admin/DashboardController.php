<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Encategory;
use App\Enpage;
use App\Enpost;
use App\Http\Controllers\Controller;
use App\Page;
use App\Post;
use App\Rucategory;
use App\Rupage;
use App\Rupost;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard()
    {
        $posts = Post::count();
        $enposts = Enpost::count();
        $ruposts = Rupost::count();
        $categories = Category::count();
        $encategories = Encategory::count();
        $rucategories = Rucategory::count();
        $pages = Page::count();
        $enpages = Enpage::count();
        $rupages = Rupage::count();

        return view('admin.dashboard', [
            'posts' => $posts,
            'enposts' => $enposts,
            'ruposts' => $ruposts,
            'categories' => $categories,
            'encategories' => $encategories,
            'rucategories' => $rucategories,
            'pages' => $pages,
            'enpages' => $enpages,
            'rupages' => $rupages

        ]);
    }
}
