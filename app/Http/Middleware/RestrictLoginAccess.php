<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestrictLoginAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // If authenticated, check if the request is coming from the login page
            if ($request->headers->get('referer') && str_contains($request->headers->get('referer'), route('login'))) {
                // If coming from the login page, allow access to any page
                return $next($request);
            }

            // If authenticated and not coming from the login page, redirect to the appropriate page based on 'iduser'
            $user = Auth::user();

            switch ($user->iduser) {
                case 1:
                    return redirect()->route('home');
                    break;
                case 2:
                    return redirect()->route('admin.home');
                    break;
                default:
                    // Handle other cases if needed
                    break;
            }
        }

        // If not authenticated, redirect to the login page
        return redirect()->route('login');
    }
}
