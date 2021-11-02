<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //can use die dump function to test if user signed in
        // dd(auth()->user());
        return view('dashboard');
    }
}
