<?php

namespace App\Http\Controllers\Admin;

use App\Rupage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.rupage.index', [
          'rupages' => Rupage::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.rupage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rupage = Rupage::create($request->all());

        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $rupage->img = $url;
        }
        $rupage->save();

        return redirect()->route('admin.rupage.index')->with('success', 'Стаття успішно створена!');
    }

    /**
     * Display the specified resource.
     *
     * @param Rupage $rupage
     * @return Response
     */
    public function show(Rupage $rupage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Rupage $rupage
     * @return Response
     */
    public function edit(Rupage $rupage)
    {
        return view('admin.rupage.edit',['rupage' => $rupage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Rupage $rupage
     * @return Response
     */
    public function update(Request $request, Rupage $rupage)
    {
        $rupage->update($request->except('slug'));
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $rupage->img = $url;
        }
        $rupage->save();
        return redirect()->route('admin.rupage.index')->with('success', 'Стаття успішно відредагована!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Rupage $rupage
     * @return Response
     */
    public function destroy(Rupage $rupage)
    {
        $rupage->delete();

        return redirect()->route('admin.rupage.index')->with('success', 'Стаття успішно видалена!');
    }
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
