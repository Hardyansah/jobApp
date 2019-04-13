<?php

namespace App\Http\Controllers;

use App\Detail;
use App\User;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::all();
        return view('details.create')->with('details', $details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$users = User::all();
        $users = $request->user_id;
        return view('details.create')->with('users', $users);
        //dd($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), Detail::valid());
        if ($validate->fails()) {
            return Redirect::to('users/' . $request->user_id)->withErrors($validate)->withInput();

        } else {
            Detail::create($request->all());
            Session::flash('notice', 'Success add Detail');
            return Redirect::to('users/' . $request->user_id);
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
        $users = User::find($id);
        return view('users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentUser = User::find($id);
        $details = User::find($id)->detail;
        //dd($details);
        return view('details.edit')->with('currentUser', $currentUser)->with('details', $details);
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
        $currentUser = User::find($id);

        //$users = User::find($id);
        $user = User::find($request->user_id);
        // if user choose a file, replace the old one //
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destination_path = 'uploads/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $currentUser->poto = $destination_path . $filename;
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $destination_path = 'uploads/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $currentUser->file = $destination_path . $filename;
        }
        // replace old data with new data from the submitted form //

        $currentUser->user_id = $request->input('user_id');
        $currentUser->alamat = $request->input('alamat');
        $currentUser->kota = $request->input('kota');
        $currentUser->agama = $request->input('agama');
        $currentUser->no_telp = $request->input('no_telp');
        $currentUser->jk = $request->input('jk');
        $currentUser->sekolah = $request->input('sekolah');
        $currentUser->jurusan = $request->input('jurusan');
        $currentUser->alamat_sekolah = $request->input('alamat_sekolah');
        $currentUser->save();

        //dd($request->user_id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->save();

        return Redirect('users.create');
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
