<?php

namespace App\Http\Controllers;

use App\Rucategory;
use App\Rupage;
use App\Rupost;

class RupageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rucategories = Rucategory::all();
        return view('mainru', compact('rucategories'));
    }

    public function Rucategory($slug)
    {
        $rucategories = Rucategory::where('slug',$slug)->first();

        return view('rucategory', [
            'rucategory' => $rucategories,
            'ruposts' => $rucategories->Ruposts()->orderBy('ruposts.created_at', 'desc')
            ->paginate(9)
        ]);

    }
    public function rucategories()
    {
        return view('rucategories', ['rucategories' => Rucategory::get()]);
    }
    public function more($slug)
    {
        $ruposts = Rupost::all()->where('slug',$slug)->first();
        return view('rupost', compact('ruposts','rucategories'));
    }
    public function rupage()
    {
        $rupages = Rupage::all();
        return view('rupages', compact('rupages'));
    }

    public function page($slug)
    {
        $rupages = Rupage::all()->where('slug',$slug)->first();
        return view('rupage', compact('rupages'));
    }




}
