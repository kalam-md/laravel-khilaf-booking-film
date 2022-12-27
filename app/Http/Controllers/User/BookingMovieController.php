<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\ScheduleMovie;
use App\Models\Seat;
use Illuminate\Support\Facades\DB;

class BookingMovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isUser');
    }

    public function booking($id)
    {
        $string = Booking::where('schedule_id', '=', $id)->pluck('seat_name')->toArray();
        $array = implode(',', $string);
        $selected = explode(',', $array);
        $collect = collect($selected);

        // dd($collect);

        return view('dashboard-user.booking.booking', [
            'booking' => ScheduleMovie::find($id),
            'seats' => Seat::all(),
            'selected' => $collect
        ]);
    }

    public function bookingStore(Request $request)
    {
        $validatedData = $request->validate([
            'schedule_id' => 'required',
            'seat_name' => 'required',
            'total_price' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        // dd($validatedData);

        Booking::create($validatedData);

        return redirect('/dashboard-user/movies')->with('success', 'Successfully Booking!');
    }
}
