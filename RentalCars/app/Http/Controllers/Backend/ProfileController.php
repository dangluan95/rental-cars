<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile');
    }

    public function updateProfile(){

    }

    public function updatePassword(){

    }
}
