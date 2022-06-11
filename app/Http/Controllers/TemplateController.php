<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('Client.home');
    }

    public function about(){
        return view('Client.about');
    }

    public function contact(){
        return view('Client.contact');
    }

    public function gallery(){
        return view('Client.gallery');
    }

    // public function menu(){
    //     return view('Client.menu');
    // }
}
