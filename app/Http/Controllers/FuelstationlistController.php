<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fuelstation;
use App\User;
use App\Order;
use Auth;

class FuelstationlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index(Request $request)
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
            'Customer_Emailid' => 'required',
        ]);

        $ordr = new Order;

        $ordr->Customer_FName = $request->input('Customer_FName');
        $ordr->Customer_LName = $request->input('Customer_LName');
        $ordr->Customer_Emailid = $request->input('Customer_Emailid');
        $ordr->Delivery_Address = $request->input('Delivery_Address');
        $ordr->package1 = $request->input('fuel_name1');
        $ordr->package2 = $request->input('fuel_name2');
        $ordr->package3 = $request->input('fuel_name3');
        if (!empty($request->input('fuel_name1'))){
            $ordr->package1_price = $request->input('fuel1_price');  
        } else {
            
        }
        if (!empty($request->input('fuel_name2'))){
            $ordr->package2_price = $request->input('fuel2_price');
        } else {
           
        }
        if (!empty($request->input('fuel_name3'))){
            $ordr->package3_price = $request->input('fuel3_price');
        } else {
           
        }
        // $ordr->package1 = $request->input('fuel_name1');
        // $ordr->package1_price = $request->input('fuel1_price');
        // $ordr->package2 = $request->input('fuel_name2');
        // $ordr->package2_price = $request->input('fuel2_price');
        // $ordr->package3 = $request->input('fuel_name3');
        // $ordr->package3_price = $request->input('fuel3_price');
        $ordr->paymentmode = $request->input('paymentmode');
        $ordr->Order_Details = $request->input('Order_Details');
         
        $ordr->save();

        return view('front.orderplaced');
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
        //   return "You can't access here!";
        return view('front.denied',compact('fuel'));
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
