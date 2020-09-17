<?php

namespace App\Http\Controllers;
use App\Models\ArticlesModels;
use Illuminate\Support\Facades\DB;
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
    // public function blog(){
    //     $articles = ArticlesModels::latest()->paginate(3);
    //     return view('pages.blog')->with('article',$articles);
    // }
    public function singleBlog($id){
        $data = ArticlesModels::find($id);
        //var_dump($datas->content);
        $datas = $data->content;
        return view('pages.blogSingle',compact('datas'));
    }
}