<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UpdateAdminRequest;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Admin;
use App\Models\User;
use Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::paginate(10);

        return view("dashboard.admin.index", compact("admins"));
    }

    public function profile()
    {
        $admin = Auth::guard("admin")->user();
        return view("dashboard.admin.profile", compact("admin"));
    }

    public function updateProfile(UpdateProfileRequest $request)
    {

        $data = $request->validated();


        $admin = Auth::guard("admin")->user();

        if ($request->old_password)
            if (!Hash::check($data["old_password"], $admin->getAuthPassword()))
                return back()->withError(trans("dashboard.Old Password Is Not Correct"));
            else
                $data["password"] = Hash::make($data["new_password"]);


        if ($request->hasFile('image')) {
            $name = 'pic_' . time() . '_' . $request->image->getClientOriginalName();
            $data["image"] = $request->file("image")->storeAs("admins", $name, "public");
        }

        unset($data["old_password"], $data["new_password"]);



        $admin->update($data);

        notify()->success(trans('dashboard.Profile Updated Successfully'), trans("dashboard.Success"));
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("create", auth()->guard("admin")->user());

        return view("dashboard.admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        // $this->authorize("create", auth()->guard("admin")->user());
        $data = $request->validated();

        $data["password"] = Hash::make($data["password"]);
        unset($data["password_confirmation"]);


        if ($request->hasFile('image')) {
            $name = 'pic_' . time() . '_' . $request->image->getClientOriginalName();
            $data["image"] = $request->file("image")->storeAs("admins", $name, "public");
        }
        $data["role"] = "admin";

        $admin = Admin::create($data);

        notify()->success(trans("dashboard.Added Successfully"), trans("dashboard.Success"));
        return redirect()->route("admins.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        // $this->authorize("update", auth()->guard("admin")->user());

        return view("dashboard.admin.edit", compact("admin"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        // $this->authorize("update", auth()->guard("admin")->user());

        $data = $request->validated();
        unset($data["password_confirmation"]);

        if ($request->password) {
            $data["password"] = Hash::make($data["password"]);
        } else
            unset($data["password"]);

        if ($request->hasFile('image')) {
            $name = 'pic_' . time() . '_' . $request->image->getClientOriginalName();
            $data["image"] = $request->file("image")->storeAs("admins", $name, "public");
        }

        $admin->update($data);

        notify()->success(trans("dashboard.Updated Successfully"), trans("dashboard.Success"));
        return redirect()->route("admins.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        // $this->authorize("delete", auth()->guard("admin")->user());

        $admin->delete();

        notify()->success(trans("dashboard.Deleted Successfully"), trans("dashboard.Success"));

        return redirect()->back();
    }
}
