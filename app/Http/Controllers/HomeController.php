<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {

        if ($request->user()->hasRole('admin')) {
            return redirect('admin')->with('status', 'Login Admin success');
        } elseif ($request->user()->hasRole('user')) {
            //return redirect('users')->with('status', 'Login Success');
            return redirect()->action('UsersController@index', [$request->user()->id]);
        } else {
            return redirect()->action('UsersController@index', [$request->user()->id]);
            //return view('users.index');
        }
    }
}
