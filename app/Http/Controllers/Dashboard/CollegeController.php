<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use App\Models\College;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = College::paginate(10);
        return view("dashboard.colleges.index", compact("colleges"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.colleges.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCollegeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollegeRequest $request)
    {
        $data = $request->validated();

        $college = College::create($data);
        notify()->success(trans("dashboard.Added Successfully"), trans("dashboard.Success"));
        return redirect()->route("colleges.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        return view("dashboard.colleges.edit", compact("college"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollegeRequest  $request
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollegeRequest $request, College $college)
    {
        $data = $request->validated();
        $college->update($data);

        notify()->success(trans("dashboard.Updated Successfully"), trans("dashboard.Success"));
        return redirect()->route("colleges.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        $college->delete();

        notify()->success(trans("dashboard.Deleted Successfully"), trans("dashboard.Success"));
        return back();
    }
}
