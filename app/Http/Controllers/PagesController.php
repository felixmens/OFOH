<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //homepage
    public function index(){
        return view('pages.index');
    }

    //about page
    public function about(){
        return view('pages.about');        
    }

    //support page
    public function support(){
        return view('pages.support');
    }

    //contact page
    public function contact(){
        return view('pages.contact');
    }
}
