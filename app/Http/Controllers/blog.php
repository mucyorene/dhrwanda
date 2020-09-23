<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class blog extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.articles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'thumbnail' => 'required|max:2048',
            'postTitle' => 'required',
            'bodys' => 'required'
        ]);
        $image = $request->file('thumbnail');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('blogImage'),$new_name);
        
        $article = new Posts;
        $article->postTitle = $request->input('postTitle');
        $article->content = $request->input('bodys');
        $article->thumb = $new_name;
        $article->postStatus = 'publish';
        $article->user_id = auth()->user()->id;
        $article->save();
        return back()->with('success','Post saved successfully');
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
           $request->file('upload')->move(public_path("uploads/"),$fileNameToStore);

        //    $request->file('bodys')->storeAs('public/uploads',$fileNameToStore);
           $CKEditorFuncNum = $request->input('CKEditorFuncNum');
           $url = asset('uploads/'.$fileNameToStore);
           $msg = 'Images successfully uploaded';
           $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','$msg')</script>";
           @header('Content-Type:text/html;charset=utf-8');
           echo $re;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
