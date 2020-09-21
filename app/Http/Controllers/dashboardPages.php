<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Contact;
class dashboardPages extends Controller
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
    
    public function index(){
        // $messages = Contact::all()->latest();
        // return view("dashboard.pages.index",compact('messages'));
    }
    public function manageArticles(){
        $article = Posts::latest()->paginate(3);
        return view('dashboard.pages.manageArticles',compact('article'));
        
    }
    public function edit(Request $request,$id){

        $image = $request->file('thumbnail');
        if (empty($image)) {
            $edit = Posts::find($id);
            $edit = Posts::find($id);
            $edit->postTitle = $request->input('postTitle');
            $edit->content = $request->input('bodys');
            $edit->save();
            // return back();
            return redirect('/manageArticles')->with('success','Article edited successfully');
        }else{
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('blogImage'),$new_name);

            $edit = Posts::find($id);
            $edit = Posts::find($id);
            $edit = Posts::find($id);
            $edit->postTitle = $request->input('postTitle');
            $edit->content = $request->input('bodys');
            $edit->thumb = $new_name;
            $edit->save();
            // return back()->with('shows','Article successfully edited');
            return redirect('/manageArticles')->with('success','Article edited successfully');
    }
}
    public function show($id){
        $shows = Posts::find($id);
        //var_dump($shows->content);
        return view('dashboard.editArticle',compact('shows'));
    }
    
    public function preview($id){
        $pre = Posts::find($id);
        return view('dashboard.pages.preview',compact('pre'));
    }

    public function delete($id){
        $art = Posts::find($id);
        $art->delete();
        return back();
    }
    public function pubStatuses($id){
        $update = Posts::find($id);
        if (($update->postStatus) == 'unpublish') {

            $update->postStatus = 'publish';
            $update->save();
            return back()->with('success','Post published on blog');

        }else{
            $update->postStatus = 'unpublish';
            $update->save();
            return back()->with('success','Post published on blog');
        }
        
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