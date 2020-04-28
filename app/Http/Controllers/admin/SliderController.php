<?php

namespace App\Http\Controllers\admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->paginate(10);
        return view('admin.slider.slider', compact('sliders'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'title' => 'max:255|required',
            'image' => 'max:255|required',
            

        ]);

        $slider = new Slider();


        try {
            $slider->create($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.slider'))->with('warning', $exception->getMessage());
        }

        $msg = "اسلایدر جدید ثبت گردید";
        return redirect(route('admin.slider'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit' ,compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $validatedData = $request->validate([
            'title' => 'max:255|required',
            'image' => 'max:255|required',
                    ]);

        try {
            $slider->update($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.slider'))->with('warning', $exception->getMessage());
        }

        $msg = "اسلایدر ویرایش  گردید";
        return redirect(route('admin.slider'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
