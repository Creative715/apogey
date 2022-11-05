<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories'=> Category::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
     public function create()
     {
        return view('admin.categories.create', [
           'category'   => [],
           'categories' => Category::with('childrenCategories')->where('category_id', '0')->get(),
           'delimiter'  => ''
        ]);
     }

     public function store(Request $request)
     {
      $category = Category::create($request->all());
        if ($request->file('img')) {
           $path = Storage::putFile('public', $request->file('img'));
           $url = Storage::url($path);
           $category->img = $url;
         }
         $category->save();
        return redirect()->route('admin.category.index')->with('success', 'Категорія успішно створена!');
     }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category'   => $category,
            'categories' => Category::with('childrenCategories')->where('category_id', '0')->get(),
            'delimiter'  => ''
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Category $category
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->except('slug'));
        if ($request->file('img')) {
           $path = Storage::putFile('public', $request->file('img'));
           $url = Storage::url($path);
           $category->img = $url;
         }
         $category->save();
         return redirect()->route('admin.category.index')->with('success', 'Категорія успішно оновлена!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
