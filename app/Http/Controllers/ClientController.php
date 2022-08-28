<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //showing client dashboard
    public function dashboard(){
        return view('Client.dashBoard');
    }
}
