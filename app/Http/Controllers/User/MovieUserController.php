<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScheduleMovie;

class MovieUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isUser');
    }

    public function index()
    {
        return view('dashboard-user.movie.index', [
            'schedules' => ScheduleMovie::all()
        ]);
    }

    public function movieShow($id)
    {
        $movie = ScheduleMovie::with('movie', 'studio')->find($id);
        return $movie;
    }
}
