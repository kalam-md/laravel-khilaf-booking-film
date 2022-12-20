<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function schedules()
    {
        return $this->belongsToMany(ScheduleMovie::class)->using(Booking::class);
    }
}
