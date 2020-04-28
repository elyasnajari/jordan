<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('admin.category.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|unique:categories|max:255',
            'slug' => 'required|unique:categories|max:255',
            'order' => 'numeric'

        ]);

        $category = new Category();


        try {
            $category->create($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.category'))->with('warning', $exception->getMessage());
        }

        $msg = "موضوع جدید با موفقیت درج شد";
        return redirect(route('admin.category'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {



        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'order' => 'numeric'

        ]);
        try {
            $category->update($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.category'))->with('warning', $exception->getMessage());
        }

        $msg = "موضوع ویرایش شد";
        return redirect(route('admin.category'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        try {
            $category->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.category'))->with('warning', $exception->getMessage());
        }

        $msg = "موضوع حذف گردید";
        return redirect(route('admin.category'))->with('success', $msg);
    }

    public function updatestatus(Category $category)
    {
        if ($category->active == 1) {
            $category->active = 0;
        } else {
            $category->active = 1;
        }
        $category->save();
        $msg = "وضعیت تغییر کرد";
        return redirect(route('admin.category'))->with('success', $msg);
    }
}
