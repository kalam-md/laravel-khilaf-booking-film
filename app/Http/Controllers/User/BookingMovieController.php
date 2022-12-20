<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScheduleMovie;
use App\Models\Seat;

class BookingMovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isUser');
    }

    public function booking($id)
    {
        return view('dashboard-user.booking.booking', [
            'booking' => ScheduleMovie::find($id),
            'seats' => Seat::all()
        ]);
    }
}
