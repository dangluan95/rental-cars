<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contact = Category::where('id',1)->first();
        return view('admin.contact',compact('contact'));
    }
}
