<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // must pull in request object
    public function index()
    {


        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validation
        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required'

            ]

        );

        //sign the user in
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
