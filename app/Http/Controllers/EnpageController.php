<?php

namespace App\Http\Controllers;

use App\Encategory;
use App\Enpage;
use App\Enpost;

class EnpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $encategories = Encategory::all();
        return view('mainen', compact('encategories'));
    }

    public function encategory($slug)
    {
        $encategories = Encategory::where('slug', $slug)->first();

        return view('encategory', [
            'encategory' => $encategories,
            'enposts' => $encategories->enposts()->orderBy('enposts.created_at', 'desc')
                ->paginate(9)
        ]);

    }

    public function encategories()
    {
        return view('encategories', ['encategories' => Encategory::get()]);
    }

    public function more($slug)
    {
        $enposts = Enpost::all()->where('slug', $slug)->first();
        return view('enpost', compact('enposts'));
    }

    public function enpage()
    {
        $enpages = Enpage::orderBy('id', 'desc')->get();
        return view('enpages')->with(['enpages' => $enpages]);
    }

    public function page($slug)
    {
        $enpages = Enpage::all()->where('slug', $slug)->first();
        return view('enpage', compact('enpages'));
    }

}
