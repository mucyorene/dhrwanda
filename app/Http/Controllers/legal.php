<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalDonationModel;
use Illuminate\Support\Facades\DB;
class legal extends Controller
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
        $donatorsList = LegalDonationModel::all();
        return view("dashboard.pages.legal")->with('donationsLegal',$donatorsList);
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
            'institutionName' => 'required',
            'email1' => 'required|email',
            'amount1' => 'required',
            'country1' => 'required',
            'message1' => 'required',
        ]);

        $donation = new LegalDonationModel;
        $donation->institutionName = $request->input('institutionName');
        $donation->email = $request->input('email1');
        $donation->amount = $request->input('amount1');
        $donation->country = $request->input('country1');       
        $donation->message = $request->input('message1');
        $donation->save();
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
