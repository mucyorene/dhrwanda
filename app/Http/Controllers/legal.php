<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalDonationModel;
use Illuminate\Support\Facades\DB;
use \Stripe\Stripe;
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
            'message1' => 'required',
        ]);

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => $request->input('amount1'),
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Donations for dhrwanda organization" 
        // ]);

        $donation = new LegalDonationModel;
        $donation->institutionName = $request->input('institutionName');
        $donation->email = $request->input('email1');
        $donation->amount = $request->input('amount1');
        $donation->country = $request->input('country1');       
        $donation->message = $request->input('message1');
        // $donation->token = $request->stripeToken;
        $donation->save();
        $amountStripe = $request->input('amount1');
        return redirect('/stripe')->with('amountStripe',$amountStripe);
    }
    public function stripe(){
        return view('pages/stripe');
    }

    public function stripePost(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));
        \Stripe\Charge::create ([
                "amount" => ($request->input('amount')) * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test Payment" 
        ]);

        // Session::flash('success', 'Payment successful!');

        return back()->with('success','Donated successfully, go back to fill');
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
