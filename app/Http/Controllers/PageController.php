<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'desc')->get();
        return view('pages')->with(['pages' => $pages]);
    }

    public function page($slug)
    {
        $pages = Page::all()->where('slug', $slug)->first();
        return view('page', compact('pages'));
    }
}
