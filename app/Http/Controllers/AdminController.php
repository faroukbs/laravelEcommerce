<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //showing admin dashboard
    public function dashboard(){
        return view('Admin.dashBoard');
    }
}
