<?php

namespace App\Http\Controllers\admin;

use App\Catgallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class CatgalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categories = Catgallery::orderBy('id', 'DESC')->paginate(10);
        return view('admin.catgallery.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catgallery.create');
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
            'title' => 'required|unique:catgalleries|max:255',
            'slug' => 'required|unique:catgalleries|max:255',
            'order' => 'numeric'

        ]);

        $category = new Catgallery();
        
        if(empty($request->image)){
            $image='/photos/1/category-thumb.png';
            $request->merge(['image'=>$image]);

            }
          

        try {
            $category->create($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.catgallery'))->with('warning', $exception->getMessage());
        }

        $msg = "موضوع جدید با موفقیت درج شد";
        return redirect(route('admin.catgallery'))->with('success', $msg);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catgallery  $catgallery
     * @return \Illuminate\Http\Response
     */
    public function show(Catgallery $catgallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catgallery  $catgallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Catgallery $catgallery)
    {
        return view('admin.catgallery.edit',compact('catgallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catgallery  $catgallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catgallery $catgallery)
    {
      //  dd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'order' => 'numeric',
            'image' => 'required'
        ]);

        
        
        if(empty($request->image)){
            $image='/photos/1/category-thumb.png';
            $request->merge(['image'=>$image]);

            }
         

        try {
            $catgallery->update($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.catgallery'))->with('warning', $exception->getMessage());
        }

        $msg = "موضوع با موفقیت ویرایش شد";
        return redirect(route('admin.catgallery'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catgallery  $catgallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catgallery $catgallery)
    {
        try {
            $catgallery->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.catgallery'))->with('warning', $exception->getMessage());
        }

        $msg = "موضوع حذف گردید";
        return redirect(route('admin.catgallery'))->with('success', $msg);
    }

    
    public function updatestatus(Catgallery $catgallery)
    {
        if ($catgallery->active == 1) {
            $catgallery->active = 0;
        } else {
            $catgallery->active = 1;
        }
        $catgallery->save();
        $msg = "وضعیت تغییر کرد";
        return redirect(route('admin.catgallery'))->with('success', $msg);
    }
}
