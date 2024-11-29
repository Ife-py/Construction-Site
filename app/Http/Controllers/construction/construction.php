<?php

namespace App\Http\Controllers\construction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class construction extends Controller
{
    public function index(){
        return view("index");
    }

    public function contact_us (){
        return view("contact_us");
    }

    public function services(){
        return view("services");
    }
    public function about_us(){
        return view("about_us");
    }

}
