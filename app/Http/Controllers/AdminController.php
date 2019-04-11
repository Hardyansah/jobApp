<?php

namespace App\Http\Controllers;

use App\Detail;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin, user');
    }
    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function create(Request $request)
    {
        $users = User::all();
        $details = Detail::all();
        return view('admin.list')->with('users', $users)->with('details', $details);
    }
}
