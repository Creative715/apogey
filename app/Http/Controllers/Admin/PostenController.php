<?php

namespace App\Http\Controllers\Admin;

use App\Enpost;
use App\Encategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.enpost.index', [
          'enposts' => enpost::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.enpost.create', [
          'enpost'    => [],
          'encategories' => encategory::with('childrenencategories')->where('encategory_id', 0)->get(),
          'delimiter'  => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $enpost = enpost::create($request->all());

        // Categories
        if($request->input('encategories')) :
          $enpost->encategories()->attach($request->input('encategories'));
        endif;
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $enpost->img = $url;
        }
        $enpost->save();

        return redirect()->route('admin.enpost.index')->with('success', 'Товар успішно створено!');
    }

    /**
     * Display the specified resource.
     *
     * @param Enpost $enpost
     * @return Response
     */
    public function show(Enpost $enpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Enpost $enpost
     * @return Response
     */
    public function edit(enpost $enpost)
    {
        return view('admin.enpost.edit', [
          'enpost'    => $enpost,
          'encategories' => encategory::with('childrenencategories')->where('encategory_id', 0)->get(),
          'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Enpost $enpost
     * @return Response
     */
    public function update(Request $request, Enpost $enpost)
    {
        $enpost->update($request->except('slug'));

        // Categories
        $enpost->encategories()->detach();
        if($request->input('encategories')) :
          $enpost->encategories()->attach($request->input('encategories'));
        endif;
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $enpost->img = $url;
        }
        $enpost->save();
        return redirect()->route('admin.enpost.index')->with('success', 'Товар успішно відредаговано!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Enpost $enpost
     * @return Response
     */
    public function destroy(Enpost $enpost)
    {
        $enpost->encategories()->detach();
        $enpost->delete();

        return redirect()->route('admin.enpost.index')->with('success', 'Товар успішно видалено!');
    }
}
