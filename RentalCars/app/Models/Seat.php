<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = "seats";

    protected $fillable = [
        'number_of_seats',
    ];

    public function cars() {
        return $this->hasMany('App\Models\Car');
    }
}
