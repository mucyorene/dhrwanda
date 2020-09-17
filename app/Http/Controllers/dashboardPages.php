<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticlesModels;
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
        $article = ArticlesModels::latest()->paginate(3);
        // var_dump($article);
        return view('dashboard.pages.manageArticles',compact('article'));
    }
    public function edit(Request $request,$id){

        $image = $request->file('thumbnail');
        if (empty($image)) {
            $edit = ArticlesModels::find($id);
            $edit = ArticlesModels::find($id);
            $edit->postTitle = $request->input('postTitle');
            $edit->content = $request->input('bodys');
            $edit->save();
            // return back();
            return redirect('/manageArticles')->with('success','Article edited successfully');
        }else{
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('blogImage'),$new_name);

            $edit = ArticlesModels::find($id);
            $edit = ArticlesModels::find($id);
            $edit = ArticlesModels::find($id);
            $edit->postTitle = $request->input('postTitle');
            $edit->content = $request->input('bodys');
            $edit->thumb = $new_name;
            $edit->save();
            // return back()->with('shows','Article successfully edited');
            return redirect('/manageArticles')->with('success','Article edited successfully');
    }
}
    public function show($id){
        $shows = ArticlesModels::find($id);
        //var_dump($shows->content);
        return view('dashboard.editArticle',compact('shows'));
    }
    public function delete($id){
        $art = ArticlesModels::find($id);
        $art->delete();
        return back();
    }
    public function uploading(Request $request){
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
}