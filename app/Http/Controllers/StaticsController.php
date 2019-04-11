<?php

namespace App\Http\Controllers;

class StaticsController extends Controller
{
    public function index()
    {
        return view('statics/index');
    }
    // public function about(){
    //     return view('statics.about');
    // }
    // public function contactUs(){
    //     return view('statics.contactUs');
    // }
}
