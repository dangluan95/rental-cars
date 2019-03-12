<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacter extends Model
{
    protected $table = "manufacters";

    public function cars() {
        return $this->hasMany('App\Models\Car');
    }
}
