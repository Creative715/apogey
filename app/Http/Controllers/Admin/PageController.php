<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.pages.index', [
          'pages' => Page::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $page = Page::create($request->all());

        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $page->img = $url;
        }
        $page->save();

        return redirect()->route('admin.page.index')->with('success', 'Стаття успішно створена!');
    }

    /**
     * Display the specified resource.
     *
     * @param Page $page
     * @return Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Page $page
     * @return Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit',['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Page $page
     * @return Response
     */
    public function update(Request $request, Page $page)
    {
        $page->update($request->except('slug'));
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $page->img = $url;
        }
        $page->save();
        return redirect()->route('admin.page.index')->with('success', 'Стаття успішно відредагована!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     * @return Response
     */
    public function destroy(page $page)
    {
        $page->delete();

        return redirect()->route('admin.page.index')->with('success', 'Стаття успішно видалена!');
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
