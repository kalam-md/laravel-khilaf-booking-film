<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: admin');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return view('dashboard-admin.index');
        } else {
            abort(403);
        }
        // return view('dashboard-admin.index');
    }
}
