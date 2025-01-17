<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.login.loginform');
    }

    // Register new admin user
    // public function register()
    // {
    //     $data = [
    //         'name' => "admin",
    //         'email' => "admin@gmail.com",
    //         'password' => Hash::make("123456")
    //     ];
    //     $user = User::create($data);
    //     if ($user) {
    //         echo "Registerd successfully";
    //     } else {
    //         echo "something went wrong";
    //     }
    // }
   // use Illuminate\Support\Facades\Hash;

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|exists:users,email', // Ensure the email exists
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            if ($user->role === 'admin') {
                return redirect()->route('dashboard'); // Redirect to dashboard if admin
            } else {
                Auth::logout(); // Logout if user is not admin
                return redirect()->route('signIn')->with('error', 'You are not authorized to access this page.');
            }
        } else {
            return redirect()->route('signIn')->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('signIn');
    }
}


// Register new admin user
// public function register()
// {
//     $data = [
//         'name' => "admin",
//         'email' => "admin@gmail.com",
//         'password' => Hash::make("123456") 
//     ];
//     $user = User::create($data);
//     if ($user) {
//         echo "Registerd successfully";
//     } else {
//         echo "something went wrong";
//     }
// }
