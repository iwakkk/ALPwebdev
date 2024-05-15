<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPassowrdController extends Controller
{
    public function forgotpassword()
    {
        return view("forgotpassword");
    }
}
