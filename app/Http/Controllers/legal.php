<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalDonationModel;
use Illuminate\Support\Facades\DB;
class legal extends Controller
{
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
        $donation = new LegalDonationModel;
        $donation->startAt = $request->input('start1');
        $donation->endAt = $request->input('end1');
        $donation->institutionName = $request->input('institutionName');
        $donation->email = $request->input('email1');
        $donation->amount = $request->input('amount1');
        $donation->country = $request->input('country1');       
        $donation->message = $request->input('message1');
        $donation->save();
        return back()->with('Thanks for donating');
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
