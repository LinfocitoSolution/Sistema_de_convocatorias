<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function create()
    {
       return view("calls.register");
    }
    public function store()
    {
        
    }
}
