<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHelpTypeRequest;
use App\Http\Requests\UpdateHelpTypeRequest;
use App\Models\HelpType;

class HelpTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helpTypes = HelpType::paginate(10);
        return view("dashboard.help-types.index", compact("helpTypes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.help-types.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHelpTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHelpTypeRequest $request)
    {
        $data = $request->validated();

        $helpType = HelpType::create($data);
        notify()->success(trans("dashboard.Added Successfully"), trans("dashboard.Success"));
        return redirect()->route("help-types.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HelpType  $helpType
     * @return \Illuminate\Http\Response
     */
    public function show(HelpType $helpType)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HelpType  $helpType
     * @return \Illuminate\Http\Response
     */
    public function edit(HelpType $helpType)
    {
        return view("dashboard.help-types.edit", compact("helpType"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHelpTypeRequest  $request
     * @param  \App\Models\HelpType  $helpType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHelpTypeRequest $request, HelpType $helpType)
    {
        $data = $request->validated();
        $helpType->update($data);

        notify()->success(trans("dashboard.Updated Successfully"), trans("dashboard.Success"));
        return redirect()->route("help-types.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HelpType  $helpType
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpType $helpType)
    {
        $helpType->delete();

        notify()->success(trans("dashboard.Deleted Successfully"), trans("dashboard.Success"));
        return back();
    }
}
