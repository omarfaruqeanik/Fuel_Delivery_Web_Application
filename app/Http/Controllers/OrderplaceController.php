<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Validator;
use App\Fuelstation;
use App\User;
use App\Order;


class OrderplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       $this->middleware('auth');
    }   

    public function index()
    {
        if (request('area')) {
            $formatDate = request('area');
            $fuelstn = Fuelstation::where('area', $formatDate)->get();
            return view('front.fuelstation',compact('fuelstn'));
        };
        $fuelstn= Fuelstation:: all();
        return view('front.fuelstation',compact('fuelstn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'lastName' => 'required',
        ]);

        $ordr = new Order;

        $ordr->Customer_Emailid = $request->input('Customer_Emailid');
        $ordr->Delivery_Address = $request->input('Delivery_Address');
        $ordr->Order_Details = $request->input('Order_Details');
        $ordr->Amount = $request->input('Amount');
        $ordr->paymentmode = $request->input('paymentmode');
         
        $ordr->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // get the shark
         $fuel = Fuelstation::find($id);

         if (Auth::user()) {   // Check is user logged in
            // show the view and pass the shark to it
            return view('front.cart',compact('fuel'));
            //  return view('front.cart')->with('id', $fuel);
        } else {
            return "You can't access here!";
        }

        
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
