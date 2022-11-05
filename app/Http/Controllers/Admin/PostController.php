<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.posts.index', [
          'posts' => Post::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.posts.create', [
          'post'    => [],
          'categories' => Category::with('childrenCategories')->where('category_id', 0)->get(),
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
        $post = Post::create($request->all());

        // Categories
        if($request->input('categories')) :
          $post->categories()->attach($request->input('categories'));
        endif;
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $post->img = $url;
        }
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Товар успішно створено!');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit(post $post)
    {
        return view('admin.posts.edit', [
          'post'    => $post,
          'categories' => Category::with('childrenCategories')->where('category_id', 0)->get(),
          'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return Response
     */
    public function update(Request $request, post $post)
    {
        $post->update($request->except('slug'));

        // Categories
        $post->categories()->detach();
        if($request->input('categories')) :
          $post->categories()->attach($request->input('categories'));
        endif;
        // Images
        if ($request->file('img')) {
          $path = Storage::putFile('public', $request->file('img'));
          $url = Storage::url($path);
          $post->img = $url;
        }
        $post->save();
        return redirect()->route('admin.post.index')->with('success', 'Товар успішно відредаговано!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     */
    public function destroy(post $post)
    {
        $post->categories()->detach();
        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Товар успішно видалено!');
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
