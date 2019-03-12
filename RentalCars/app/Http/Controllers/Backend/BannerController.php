<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function showLogoAndSlide(){
        return view('admin.logo-slide.index');
    }

    public function updateLogo(){

    }

    public function updateSlide(){

    }
}
