<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if ($request->user()->hasRole('admin')) {
        //     return redirect('admin')->with('status', 'Login success');
        // } elseif ($request->user()->hasRole('user')) {

        //     return redirect('user')->with('status', 'Login Success');
        // } else {
        return view('home');
        //}
    }
}
