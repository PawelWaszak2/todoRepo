<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function loginIndex(){
        return view('Auth.login');
    }
    public function loginRequest(request $request){

       $validated =  $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($validated)){

            $request->session()->regenerate();
            return redirect()->route('home');
        }
        else
        {
            throw ValidationException::withMessages([
                'credentials' => 'Email or Password is incorrect'
            ]);
        }
    }
    public function registerIndex(){
        return view('Auth.register');
    }
    public function registerRequest(request $request){
        $validated_user = $request->validate([
            'name' => 'required|string|max:255|unique:users|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:6',
            'phone_number' => 'string|max:255|unique:users|nullable',
        ]);

        $user = new User();
        $user->name = $validated_user['name'];
        $user->email = $validated_user['email'];
        $user->password = $validated_user['password'];
        $user->phone_number = $validated_user['phone_number'];
        $user->save();

        Auth::login($user);

        return redirect('/home');
    }
    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginIndex');
    }
}
