<?php

namespace App\Http\Controllers;

use App\Detail;
use App\User;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //dd($users);
        $details = Detail::all();
        //$details = User::find($id)->detail;

        return view('admin.cv')->with('users', $users)->with('details', $details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->status_cv == 0) {
            $users = Detail::all();
            //$users = User::with('detail')->find($request->id)->detail;
            //$users = Detail::find($request->user_id);
            dd($users);
            $users->status_cv = 0;
            $users->save();
            return redirect('admin.cv');
        } elseif ($request->status_cv == 1) {
            $users = Detail::find($request->id);
            $users->status_cv = 1;
            $users->save();
            return redirect('admin.cv');
        } else {
            $users = Detail::find($request->id);
            $users->status_cv = 2;
            $users->save();
            return redirect('admin.cv');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$users = User::find($id);
        $user = Detail::find($request->user_id);
        $user->status_cv = $request->input('status_cv');
        $user->save();

        return Redirect('admin.cv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
