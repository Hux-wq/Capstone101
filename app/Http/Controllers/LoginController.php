<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    

     public function index()
    {
        return view('auth.login'); // Ensure you have this view
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|email',
            'password' => 'required|string',
        ]);

        // Prepare credentials
        $credentials = [
            'user_email' => $request->username, 
            'password' => $request->password,
        ];
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = auth()->user(); 

            $session = Session::put('user_id', $user->user_id);
            
            return redirect()->intended('/');
                        
        }else{

            return back()->withErrors(['username' => 'Invalid credentials or user not found.']);

        }

       
    }

    /**
     * Handle logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/login'); // Redirect to the login page
    }
}
