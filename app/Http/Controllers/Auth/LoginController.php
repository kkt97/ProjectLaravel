<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\User;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
//
//
//class LoginController extends Controller
//{
//    public function index(){
//        return view('auth.login');
//    }
//
//    public function login(Request $request){
//        $validation = $request -> validate([
//            'user_id' => 'required',
//            'password' => 'required',
//        ]);
//
//        $remember = $request -> input('remember');
//
//        if(Auth::attempt($validation, $remember)){
//            return redirect()->route('/');
//
//            Hash::
//
//        } else{
//            return redirect()->back();
//        }
//    }
//
//    public function logout(){
//        Auth::logout();
//
//        return redirect()->route('/');
//    }
//}


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        Log::info(__METHOD__);

        $request->validate([
            'user_id' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($request->only('user_id', 'password'))) {

            return response()->json(Auth::user(), 200);
        }
        throw ValidationException::withMessages([
            'user_id' => ['The provided credentials are incorect.']
        ]);
    }

    public function logout()
    {
        Auth::logout();
    }
}
