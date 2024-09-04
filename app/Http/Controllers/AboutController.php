<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('About.Mkwawa');
    }

    public function tobacco(){
        return view('About.Tanzania-Tobacco-History');
    }
}
