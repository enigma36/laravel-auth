<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
/*
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
*/

    

    public function login()
    {
        return view('auth.login');
    }
    public function registration()
    {

        return view('auth.registration');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:3'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        /**
         * Send email verification
         * Attach Link in email
         * Use MailTrap to send email
         * Resend Email
         * <a href="{{route('profile')}}">Click here to verify your email</a>
        **/
        

        if ($res) {
            return back()->with('success', 'You have been successfully registered');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function loginUser(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
