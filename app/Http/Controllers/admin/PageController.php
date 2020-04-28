<?php

namespace App\Http\Controllers\admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'DESC')->paginate(10);
        return view('admin.page.pages', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
            'title' => 'required|unique:articles|max:255',
            'slug' => 'required|unique:articles|max:255',
            'keyword' => 'max:255',
            'description' => 'required'
        ]);

        $page = new Page();


        try {
            $page->create($request->all());
        
        } catch (Exception $exception) {
            return redirect(route('admin.page'))->with('warning', $exception->getMessage());
        }

        $msg = "صفحه جدید ایجاد شد";
        return redirect(route('admin.page'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'slug' => 'required|unique:articles|max:255',
            'keyword' => 'max:255',
            'description' => 'required'
        ]);

        


        try {
            $page->update($request->all());
        
        } catch (Exception $exception) {
            return redirect(route('admin.page'))->with('warning', $exception->getMessage());
        }

        $msg = "صفحه ویرایش گردید";
        return redirect(route('admin.page'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        try {
            $page->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.page'))->with('warning', $exception->getMessage());
        }

        $msg = "صفحه حذف گردید";
        return redirect(route('admin.page'))->with('success', $msg);
    }
    public function updatestatus(Page $page)
    {
        if ($page->active == 1) {
            $page->active = 0;
        } else {
            $page->active = 1;
        }
        $page->save();
        $msg = "وضعیت تغییر کرد";
        return redirect(route('admin.page'))->with('success', $msg);
    }

}
