<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = "cars";

    public function manufacter()
    {
        return $this->belongsTo('App\Models\Manufacter');
    }

    public function number_of_seat()
    {
        return $this->belongsTo('App\Models\Seat');
    }
}
