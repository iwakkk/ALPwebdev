<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function adminhome()
    {
        return view("adminhome");
    }
}
