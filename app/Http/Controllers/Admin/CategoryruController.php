<?php

namespace App\Http\Controllers\Admin;

use App\Encategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.encategory.index', [
            'encategories'=> encategory::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
     public function create()
     {
        return view('admin.encategory.create', [
           'encategory'   => [],
           'encategories' => encategory::with('childrenencategories')->where('encategory_id', '0')->get(),
           'delimiter'  => ''
        ]);
     }

     public function store(Request $request)
     {
      $encategory = encategory::create($request->all());
        if ($request->file('img')) {
           $path = Storage::putFile('public', $request->file('img'));
           $url = Storage::url($path);
           $encategory->img = $url;
         }
         $encategory->save();
        return redirect()->route('admin.encategory.index')->with('success', 'Категорія успішно створена!');
     }

    /**
     * Display the specified resource.
     *
     * @param encategory $encategory
     * @return Response
     */
    public function show(encategory $encategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param encategory $encategory
     * @return Response
     */
    public function edit(encategory $encategory)
    {
        return view('admin.encategory.edit', [
            'encategory'   => $encategory,
            'encategories' => encategory::with('childrenencategories')->where('encategory_id', '0')->get(),
            'delimiter'  => ''
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param encategory $encategory
     * @return Response
     */
    public function update(Request $request, encategory $encategory)
    {
        $encategory->update($request->except('slug'));
        if ($request->file('img')) {
           $path = Storage::putFile('public', $request->file('img'));
           $url = Storage::url($path);
           $encategory->img = $url;
         }
         $encategory->save();
         return redirect()->route('admin.encategory.index')->with('success', 'Категорія успішно оновлена!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param encategory $encategory
     * @return Response
     */
    public function destroy(encategory $encategory)
    {
        $encategory->delete();

        return redirect()->route('admin.encategory.index');
    }
}
