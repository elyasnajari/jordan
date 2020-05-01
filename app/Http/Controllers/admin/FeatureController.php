<?php

namespace App\Http\Controllers\admin;
use App\Feature;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Exception;


class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::orderBy('id', 'DESC')->paginate(10);
        return view('admin.feature.feature', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idparent = Feature::all()->pluck('title', 'id');
        return view('admin.feature.create', compact('idparent'));
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
            'title' => 'required|max:255'
          

        ]);

        $Feature = new Feature();



        try {
            $Feature = $Feature->create($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.feature'))->with('warning', $exception->getMessage());
        }

        $msg = "خصوصیت جدید ثبت شد";
        return redirect(route('admin.feature'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        $idparent = Feature::all()->pluck('title', 'id');
        return view('admin.feature.edit', compact('feature','idparent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255'
          

        ]);

        



        try {
            $feature->update($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.feature'))->with('warning', $exception->getMessage());
        }

        $msg = "خصوصیت ویرایش گردید";
        return redirect(route('admin.feature'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        try {
            $feature->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.feature'))->with('warning', $exception->getMessage());
        }

        $msg = "خصوصیت حذف گردید";
        return redirect(route('admin.feature'))->with('success', $msg);
    }


    public function updatestatus(Feature $feature)
    {
        if ($feature->active == 1) {
            $feature->active = 0;
        } else {
            $feature->active = 1;
        }
        $feature->save();
        $msg = "وضعیت تغییر کرد";
        return redirect(route('admin.feature'))->with('success', $msg);
    }

}
