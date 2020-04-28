<?php

namespace App\Http\Controllers\admin;

use App\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::orderBy('id', 'DESC')->paginate(10);
        return view('admin.agent.agent', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agent.create');
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
            'code' => 'max:10',
            'name_shop' => 'required',
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
            'order' => 'numeric',
            'mob' => 'numeric'

        ]);

        $agent = new Agent();


        try {
            $agent->create($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.agent'))->with('warning', $exception->getMessage());
        }

        $msg = "نمایندگی جدید درج گردید";
        return redirect(route('admin.agent'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('admin.agent.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {

        $validatedData = $request->validate([
            'code' => 'max:10',
            'name_shop' => 'required',
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
            'order' => 'numeric',
            'mob' => 'numeric'

        ]);

        try {
            $agent->update($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.agent'))->with('warning', $exception->getMessage());
        }

        $msg = "اطلاعات ویرایش گردید";
        return redirect(route('admin.agent'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        try {
            $agent->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.agent'))->with('warning', $exception->getMessage());
        }

        $msg = "نمایندگی حذف گردید";
        return redirect(route('admin.agent'))->with('success', $msg);
    }

    public function updatestatus(Agent $agent)
    {
        if ($agent->active == 1) {
            $agent->active = 0;
        } else {
            $agent->active = 1;
        }
        $agent->save();
        $msg = "وضعیت تغییر کرد";
        return redirect(route('admin.agent'))->with('success', $msg);
    }
}
