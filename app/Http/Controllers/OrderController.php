<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Validator;
use App\User;
use DB;
use App\Fuelstation;
use App\Order;

class OrderController extends Controller
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
        if(request()->ajax())
        {
      
            $data = DB::table('orders')
            ->select("*");
           return DataTables::of($data)
                    ->rawColumns(['action'])
                    ->make(true);


     }
        $user= User:: all();
        return view('admin.display',compact('user'));
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
        $rules = array(
        'stn_name' => 'required|string|max:255',
        'stn_phn' => 'required|string|max:255',
        'area' => 'required|string|max:255',
            
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $fuelstn = new Fuelstation;

        $fuelstn->stn_name = $request->input('stn_name');
        $fuelstn->stn_phn = $request->input('stn_phn');
        $fuelstn->fuel_name1 = $request->input('fuel_name1');
        $fuelstn->fuel_name2 = $request->input('fuel_name2');
        $fuelstn->fuel_name3 = $request->input('fuel_name3');
        $fuelstn->fuel1_price = $request->input('fuel1_price');
        $fuelstn->fuel2_price = $request->input('fuel2_price');
        $fuelstn->fuel3_price = $request->input('fuel3_price');
        $fuelstn->area = $request->input('area');
        $fuelstn->map_url = $request->input('map_url');
        $fuelstn->owner_name = auth()->user()->name;
        $fuelstn->owner_email = auth()->user()->email;
        
       $fuelstn->save();

        return response()->json(['success' => 'Fuel Station Added successfully.']);
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
