<?php

namespace App\Http\Controllers\admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('id', 'DESC')->paginate(10);
        return view('admin.menu.menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idparent = Menu::all()->pluck('title', 'id');
        return view('admin.menu.create', compact('idparent'));
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
            'link' => 'required',
            'idparent' => 'max:255'

        ]);

        $menu = new Menu();



        try {
            $menu = $menu->create($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.menu'))->with('warning', $exception->getMessage());
        }

        $msg = "مقاله جدید ثبت شد";
        return redirect(route('admin.menu'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $idparent = Menu::all()->pluck('title', 'id');
        return view('admin.menu.edit', compact('menu','idparent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $validatedData = $request->validate([

            'title' => 'required',
            'link' => 'required'
        ]);

        try {
            $menu->update($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.menu'))->with('warning', $exception->getMessage());
        }

        $msg = "اطلاعات ویرایش گردید";
        return redirect(route('admin.menu'))->with('success', $msg);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        try {
            $menu->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.menu'))->with('warning', $exception->getMessage());
        }

        $msg = "منو حذف گردید";
        return redirect(route('admin.menu'))->with('success', $msg);
    }

    public function updatestatus(Menu $menu)
    {
        if ($menu->active == 1) {
            $menu->active = 0;
        } else {
            $menu->active = 1;
        }
        $menu->save();
        $msg = "وضعیت تغییر کرد";
        return redirect(route('admin.menu'))->with('success', $msg);
    }
}
