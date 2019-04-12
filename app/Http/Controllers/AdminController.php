<?php

namespace App\Http\Controllers;

use App\Detail;
use App\User;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin, user');
    }
    public function index()
    {
        return view('admin.index');
    }

    public function create(Request $request)
    {
        $users = User::all();
        //dd($users);
        $details = Detail::all();
        //$details = User::find($id)->detail;

        return view('admin.list')->with('users', $users)->with('details', $details);
    }

    public function show($id)
    {
        $users = User::find($id);
        //dd($users);
        $details = User::find($id)->detail;
        //$details = Detail::all();
        return view('admin.show')->with('users', $users)->with('details', $details);
    }

    public function store(Request $request)
    {
        Detail::create($request->all());
        return redirect()->route("admin.cv", $request->user_id);
    }

    public function destroy($id)
    {

        User::destroy($id);
        Session::flash("notice", "User success deleted");
        return redirect()->route("admin.create");

    }
}
