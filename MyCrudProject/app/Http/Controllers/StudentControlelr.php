<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentControlelr extends Controller
{
    public function index(){
        return view('index');
    }
}
