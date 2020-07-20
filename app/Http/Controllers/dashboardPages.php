<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPages extends Controller
{
    public function index(){
        return view("dashboard.pages.index");
    }
    // public function legal(){
    //     return view("dashboard.pages.legal");
    // }
    // public function personal(){
    //     return view("dashboard.pages.personal");
    // }
    public function manageArticles(){
        return view('dashboard.pages.manageArticles');
    }
    public function addArticles(){
        // return view('dashboard.pages.articles');
    }
    public function uploads(Request $request){
        if ($request->hasFile('upload')) {
           //getting file with extenstion
           $fileWithExtension = $request->file('upload')->getClientOriginalName();
           //getting file without extensions
           $fileName = pathinfo($fileWithExtension,PATHINFO_FILENAME);
           //getting file extension
           $extension = $request->file('upload')->getClientOriginalExtension();
           //get file to store
           $fileNameToStore =  $fileName.'_'.time().'.'.$extension;
           //File upload
           $request->file('upload')->storeAs('public/uploads',$fileNameToStore);
           $CKEditorFuncNum = $request->input('CKEditorNum');
           $url = asset('storage/uploads/'.$fileNameToStore);
           $msg = 'Image successfully uploaded';
           $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','$msg')</script>";
           @header('Content-Type:text/html;charset=utf-8');
           echo $re;
        }
    }
}