<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScheduleMovie;

class BookingMovieController extends Controller
{
    public function booking($id)
    {
        return view('dashboard-user.booking.booking', [
            'booking' => ScheduleMovie::find($id)
        ]);

        // $movie = ScheduleMovie::with('movie', 'studio')->find($id);
        // return $movie;
    }
}
