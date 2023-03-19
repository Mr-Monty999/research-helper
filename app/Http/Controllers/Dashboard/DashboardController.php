<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $researchHelpRequestsCount = 0;
        return view("dashboard.index", compact("researchHelpRequestsCount"));
    }

    public function login()
    {
        return view("dashboard.login");
    }
    public function attemptLogin(Request $request)
    {
        $rememberMe = $request->remember ? true : false;
        if (
            Auth::guard("admin")->attempt([
                "email" => $request->email,
                "password" => $request->password,
            ], $rememberMe)
        ) {
            return redirect()->route("dashboard.index");
        }

        return back()->withError(trans("dashboard.login-error"));
    }
    public function logout()
    {
        Auth::guard("admin")->logout();

        return redirect()->route("dashboard.login");
    }
}
