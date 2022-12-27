<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isUser');
    }

    public function index()
    {
        $bookings = Booking::with('schedule', 'user')->get();
        // dd($book);
        return view('dashboard-user.booking.index', [
            'bookings' => $bookings
        ]);
    }
}
