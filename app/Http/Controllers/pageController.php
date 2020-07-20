<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        $title = "This is the title";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        return view('pages.services');
    }
    public function causes(){
        return view('pages.causes');
    }
    public function donate(){
        return view('pages.donate');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function singleBlog(){
        return view('pages.blog-single');
    }
}