<?php

namespace App\Http\Controllers\Admin;

use App\Enpage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.enpage.index', [
          'enpages' => enpage::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.enpage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $enpage = Enpage::create($request->all());

        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $enpage->img = $url;
        }
        $enpage->save();

        return redirect()->route('admin.enpage.index')->with('success', 'Стаття успішно створена!');
    }

    /**
     * Display the specified resource.
     *
     * @param Enpage $enpage
     * @return Response
     */
    public function show(Enpage $enpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Enpage $enpage
     * @return Response
     */
    public function edit(Enpage $enpage)
    {
        return view('admin.enpage.edit',['enpage' => $enpage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Enpage $enpage
     * @return Response
     */
    public function update(Request $request, Enpage $enpage)
    {
        $enpage->update($request->except('slug'));
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $enpage->img = $url;
        }
        $enpage->save();
        return redirect()->route('admin.enpage.index')->with('success', 'Стаття успішно відредагована!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Enpage $enpage
     * @return Response
     */
    public function destroy(Enpage $enpage)
    {
        $enpage->delete();

        return redirect()->route('admin.enpage.index')->with('success', 'Стаття успішно видалена!');
    }

}
