<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use Validator;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pdf = new Detail;
        $validate = Validator::make($request->all(), Detail::valid());
        if ($validate->fails()) {
            return Redirect::to('users/create' . $request->user_id)->withErrors($validate)->withInput();

        } else {

            // upload the image //
            $file = $request->file('file');
            //dd($file);
            $destination_path = 'uploads/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);

            // save image data into database //
            $pdf->file = $destination_path . $filename;
            $pdf->user_id = $request->input('user_id');
            $pdf->alamat = $request->input('alamat');
            $pdf->kota = $request->input('kota');
            $pdf->agama = $request->input('agama');
            $pdf->save();

            Detail::create($request->all());
            Session::flash("notice", "Users success created");
            return Redirect::to('users/create' . $request->user_id);
            //return redirect()->route("users.index");
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
        // $users = User::find($id);
        // return view('users.detail')->with('users', $users);
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
        //
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
