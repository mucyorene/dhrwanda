<?php

namespace App\Http\Controllers;
use App\Posts;
use App\Comments;
use Illuminate\Http\Request;

class blogContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Posts::latest()->Where('postStatus','=','unpublish')->paginate(3);
        $recent=Posts::latest()->Where('postStatus','=','unpublish')->paginate(3);
        return view('pages.blog')->with('article',$articles)->with('recent',$recent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        request()->validate([
            'cNames' => 'required|min:2',
            'cEmail' =>'required|email',
            'cMessage' => 'required'
        ]);
        $saveComment = new Comments;
        $saveComment->name = $request->input('cNames');
        $saveComment->email = $request->input('cEmail');
        $saveComment->message = $request->input('cMessage');
        $saveComment->posts_id = $id;
        $saveComment->save();
        return back()->with('success','Thanks for commenting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singles = Posts::find($id);
        $recent=Posts::latest()->Where('postStatus','=','unpublish')->limit(3)->get();
        $comments = Posts::find($id)->comments()->latest()->get();
        // foreach ($comments as $value) {
        //    echo $value->email."<br>";
        // }
        // var_dump($singles);
        return view('pages.blogSingle',compact('singles','comments'))->with('recent',$recent);
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
