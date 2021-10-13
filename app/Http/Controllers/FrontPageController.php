<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{

    public function home(){

        return view('front.index');
    }

    public function about(){

        return view('front.pages.about');
    }


    public function contact(){

        return view('front.pages.contact');
    }

    public function courses(){

        return view('front.pages.courses');
    }

    public function details($id){

        return view('front.pages.details');
    }

    public function teachers(){

        return view('front.pages.teachers');
    }
}
