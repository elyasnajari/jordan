<?php

namespace App\Http\Controllers\admin;

use App\Catgallery;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::orderBy('id', 'DESC')->paginate(10);
        return view('admin.gallery.gallery', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catgalleries = Catgallery::all()->pluck('title', 'id');

        return view('admin.gallery.create', compact('catgalleries'));
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
            'title' => 'required|max:255',
            'image' => 'required',
            'categories' => 'required'
         
        ]);

        $gallery = new Gallery();
if(empty($request->image)){
    $image='admin/img/category-thumb.png';
    $request->merge(['image'=>$image]);
    }
   

        try {
            $gallery = $gallery->create($request->all());
            $gallery->catgalleries()->attach($request->categories);
        } catch (Exception $exception) {
            return redirect(route('admin.gallery'))->with('warning', $exception->getMessage());
        }

        $msg = "تصویر جدید ثبت شد";
        return redirect(route('admin.gallery'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $catgalleries = Catgallery::all()->pluck('title', 'id');

        return view('admin.gallery.edit', compact('gallery','catgalleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'categories' => 'required'
         
        ]);

      
if(empty($request->image)){
    $image='admin/img/category-thumb.png';
    $request->merge(['image'=>$image]);
    }
   

        try {
         $gallery->update($request->all());
            $gallery->catgalleries()->sync($request->categories);
        } catch (Exception $exception) {
            return redirect(route('admin.gallery'))->with('warning', $exception->getMessage());
        }

        $msg = "رکورد ویرایش شد.";
        return redirect(route('admin.gallery'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        try {
            $gallery->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.gallery'))->with('warning', $exception->getMessage());
        }

        $msg = "تصویر گالری حذف شد";
        return redirect(route('admin.gallery'))->with('success', $msg);
    }
}
