<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    // public function handle($request, Closure $next)
    // {
    //     if (!Auth::check()) {
    //         // Set a session alert or return a JSON response for AJAX
    //         if ($request->ajax()) {
    //             return response()->json(['error' => 'You must log in to perform this action.'], 403);
    //         }
    //         session()->flash('alert', 'You must log in to perform this action.');
    //         return redirect()->route('loginform'); // Redirect to login
    //     }
    //     return $next($request);
    // }


    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            // Set a session alert or return a JSON response for AJAX
            if ($request->ajax()) {
                return response()->json(['error' => 'You must log in to perform this action.'], 403);
            }

            // Flash the alert message to session
            session()->flash('alert', 'You must log in to perform this action.');

            // Redirect to the login page
            return redirect()->route('loginform');
        }

        return $next($request);
    }

}
