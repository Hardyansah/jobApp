<?php

namespace App\Http\Controllers;

class MasterAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin, user');
    }
}
