<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function aaca(){
        return view('Academic/Academic');      }

    public function aind(){
        return view('Industrial/Industrial');      }

    public function astu(){
        return view('Student/Student');      }
}
