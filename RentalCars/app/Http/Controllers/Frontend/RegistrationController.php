<?php

namespace App\Http\Controllers\Frontend;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;

class RegistrationController extends Controller
{
    public function register(){
        return view('authentication.frontend.register');
    }

    public function postRegister(Request $request){
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors(),
            ], 200);
        } else {
            $user = Sentinel::registerAndActivate($request->all());
            $role = Sentinel::findRoleBySlug('customer');
            $role->users()->attach($user);
            $notice = new MessageBag([
                'notice'=>'Registration Succeed !']);
            return response()->json([
                    'error' => false,
                    'message' => $notice,
            ], 200);
        }
    }
}
