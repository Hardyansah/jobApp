<?php

namespace App\Http\Controllers;

use App\Detail;
use App\User;
use Illuminate\Http\Request;
use Redirect;
use Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //$currentUser = $request->user_id;
        //dd($currentUser);
        $currentUser = User::find($id);
        $details = User::with('detail')->find($id)->detail;
        //dd($details);
        if ($currentUser->status == 0) {
            return view('details.create')->with('currentUser', $currentUser)->with('details', $details);
        } else {
            return view('users.index')->with('currentUser', $currentUser)->with('details', $details);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new Detail;
        $validate = Validator::make($request->all(), Detail::valid());
        if ($validate->fails()) {
            return Redirect::to('details/create' . $request->user_id)->withErrors($validate)->withInput();

        } else {

            // upload the cv //
            $file = $request->file('file');
            //dd($file);
            $destination_path = 'uploads/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);

            // upload the cv
            $file2 = $request->file('poto');
            //dd($file2);
            $destination_path2 = 'uploads/';
            $filename2 = str_random(6) . '_' . $file2->getClientOriginalName();
            $file2->move($destination_path2, $filename2);

            // save image data into database //
            $users->file = $destination_path . $filename;
            $users->poto = $destination_path2 . $filename2;
            $users->user_id = $request->input('user_id');
            $users->alamat = $request->input('alamat');
            $users->kota = $request->input('kota');
            $users->agama = $request->input('agama');
            $users->no_telp = $request->input('no_telp');
            $users->jk = $request->input('jk');
            $users->sekolah = $request->input('sekolah');
            $users->jurusan = $request->input('jurusan');
            $users->alamat_sekolah = $request->input('alamat_sekolah');
            $users->save();

            $user = User::find($request->user_id);
            //dd($request->user_id);
            $user->status = 1;
            $user->save();

            return Redirect('home');

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
        $currentUser = User::find($id);
        $details = User::find($id)->details->sortBy('details.created_at');
        return view('users.show')->with('currentUser', $currentUser)->with('details', $details);
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
        return view('details.edit')->with('currentUser', $currentUser);
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
        $users = User::find($id);
        $user = User::find($request->user_id);
        // if user choose a file, replace the old one //
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destination_path = 'uploads/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $users->poto = $destination_path . $filename;
        }
        // replace old data with new data from the submitted form //
        $users->file = $request->input('file');
        $users->user_id = $request->input('user_id');
        $users->alamat = $request->input('alamat');
        $users->kota = $request->input('kota');
        $users->agama = $request->input('agama');
        $users->no_telp = $request->input('no_telp');
        $users->jk = $request->input('jk');
        $users->sekolah = $request->input('sekolah');
        $users->jurusan = $request->input('jurusan');
        $users->alamat_sekolah = $request->input('alamat_sekolah');
        $users->save();

        //dd($request->user_id);

        $user->no_telp = $request->input('name');
        $user->jk = $request->input('email');
        $user->age = $request->input('age');
        $user->save();

        return Redirect('home');
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
