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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHelpTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHelpTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HelpType  $helpType
     * @return \Illuminate\Http\Response
     */
    public function show(HelpType $helpType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HelpType  $helpType
     * @return \Illuminate\Http\Response
     */
    public function edit(HelpType $helpType)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HelpType  $helpType
     * @return \Illuminate\Http\Response
     */
    public function destroy(HelpType $helpType)
    {
        //
    }
}
