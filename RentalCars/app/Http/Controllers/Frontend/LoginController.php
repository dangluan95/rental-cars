<?php
namespace App\Http\Controllers\Frontend;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{

    public function login()
    {
        return view('authentication.frontend.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors(),
            ], 200);
        } else {
            Sentinel::authenticate($request->all());
            if (Sentinel::check()) {
                return response()->json([
                    'error' => false,
                    'message' => 'success',
                ], 200);
            } else {
                $errors = new MessageBag([
                    'errorlogin'=>'Email or Password be wrong !']);
                return response()->json([
                    'error' => true,
                    'message' => $errors,
                ], 200);
            }
        }
    }

    public function logout()
    {
        Sentinel::logout();
    }
}
