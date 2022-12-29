<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use App\Models\ScheduleMovie;
use App\Models\Studio;
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
            return view('dashboard-admin.index', [
                'schedules' => ScheduleMovie::count(),
                'movies' => Movie::count(),
                'studios' => Studio::count(),
                'categories' => Category::count(),
            ]);
        } else {
            abort(403);
        }
    }
}
