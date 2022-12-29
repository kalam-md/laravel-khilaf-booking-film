<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
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
        $bookings = Booking::with('schedule', 'user')->get();
        if (Auth::user()->role == 'admin') {
            return view('dashboard-admin.index', [
                'schedules' => ScheduleMovie::count(),
                'movies' => Movie::count(),
                'studios' => Studio::count(),
                'categories' => Category::count(),
                'bookings' => $bookings,
            ]);
        } else {
            abort(403);
        }
    }
}
