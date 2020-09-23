<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndividualDonations;
class individuals extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $individualDonation = IndividualDonations::all();
        return view('dashboard.pages.personal')->with('individuals',$individualDonation);
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
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'email' => 'required|email',
            'country' => 'required',
            'amount' => 'required',
            'phoneNumber' => 'required|min:10'
        ]);
        $personal = new IndividualDonations;
        $personal->firstName = $request->input('firstName');
        $personal->lastName = $request->input('lastName');
        $personal->email = $request->input('email');     
        $personal->country = $request->input('country'); 
        $personal->phoneNumber = $request->input('phoneNumber');       
        $personal->amount = $request->input('amount');
        $personal->message = $request->input('message');    
        $personal->save();
        return back()->with('success','Thanks for donating at Dh Rwanda');
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
