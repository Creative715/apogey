<?php

namespace App\Http\Controllers\Admin;

use App\Rupost;
use App\Rucategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.rupost.index', [
          'ruposts' => Rupost::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.rupost.create', [
          'rupost'    => [],
          'rucategories' => Rucategory::with('childrenRucategories')->where('rucategory_id', 0)->get(),
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
        $rupost = Rupost::create($request->all());

        // Categories
        if($request->input('rucategories')) :
          $rupost->rucategories()->attach($request->input('rucategories'));
        endif;
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $rupost->img = $url;
        }
        $rupost->save();

        return redirect()->route('admin.rupost.index')->with('success', 'Товар успішно створено!');
    }

    /**
     * Display the specified resource.
     *
     * @param Rupost $rupost
     * @return Response
     */
    public function show(Rupost $rupost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Rupost $rupost
     * @return Response
     */
    public function edit(Rupost $rupost)
    {
        return view('admin.rupost.edit', [
          'rupost'    => $rupost,
          'rucategories' => Rucategory::with('childrenRucategories')->where('rucategory_id', 0)->get(),
          'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Rupost $rupost
     * @return Response
     */
    public function update(Request $request, Rupost $rupost)
    {
        $rupost->update($request->except('slug'));

        // Categories
        $rupost->rucategories()->detach();
        if($request->input('rucategories')) :
          $rupost->rucategories()->attach($request->input('rucategories'));
        endif;
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $rupost->img = $url;
        }
        $rupost->save();
        return redirect()->route('admin.rupost.index')->with('success', 'Товар успішно відредаговано!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Rupost $rupost
     * @return Response
     */
    public function destroy(Rupost $rupost)
    {
        $rupost->rucategories()->detach();
        $rupost->delete();

        return redirect()->route('admin.rupost.index')->with('success', 'Товар успішно видалено!');
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
