<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class perfController extends Controller
{
    public function index(){
        $username = auth()->user()->name;
        return view('perf',compact('username'));
    }
    //
}
