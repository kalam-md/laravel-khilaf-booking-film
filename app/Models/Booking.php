<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'bookings';

    public function seats()
    {
        return $this->belongsToMany(Seat::class, 'bookings', 'seat_id', 'schedule_id,');
    }

    public function schedules()
    {
        return $this->belongsToMany(ScheduleMovie::class, 'bookings', 'seat_id', 'schedule_id');
    }
}
