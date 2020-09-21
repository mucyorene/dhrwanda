<?php

namespace App\Http\Controllers;
use App\Posts;
use App\Contact;
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
    public function contactPost(Request $request){
        
        request()->validate([
            'names'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
        ]);
        $varContact = new contact;
        $varContact->names = $request->input('names');
        $varContact->email = $request->input('email');
        $varContact->subject = $request->input('subject');
        $varContact->message = $request->input('message');
        $varContact->save();
        return back()->with('success','Thanks for contacting us');
    }
    // public function showLogin(){
    //     return View('login');
    // }
    // public function doLogin(Request $request){
    //     request()->validate([
    //         'password'=>'required',
    //         'email'=>'required|email'
    //     ]);
    //         $userdata = array(
    //             'email' => $request->input('email'),
    //             'password' => $request->input('password')
    //         );
    //         foreach ($userdata as $key => $value) {
    //             echo $value->$key;
    //         }
    //         // if (Auth::attempt($userdata)) {
    //         //     // echo "<script>alert('Success')</script>";
    //         //     return 'ok';
    //         // }else{
    //         //     // echo "<script>alert('Success')</script>";
    //         //     // return redirect('/loginTrue');
    //         //     return 'No';
    //         // }
    // }
}