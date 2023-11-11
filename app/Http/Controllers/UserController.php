<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(?string $name = "Laravel"){
       
        return view('homepage', compact('name'));
       
    }

}
