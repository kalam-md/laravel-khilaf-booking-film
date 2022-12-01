<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: user');
    }

    public function index()
    {
        if (Auth::user()->role == 'user') {
            return view('dashboard-user.index');
        } else {
            abort(403);
        }
    }
}
