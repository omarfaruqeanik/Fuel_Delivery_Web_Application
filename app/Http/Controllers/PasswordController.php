<?php

namespace App\Http\Controllers;

use App\Sample_data;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use App\Student;
use App\User;
use DB;

class PasswordController extends Controller
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
     
    public function index(Request $request)
    {
if(request()->ajax())
     {
       $data = DB::table('users')
        ->where('role', 'student');
      return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o"></i> Edit</button>';
                       
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
     }
          
        $user= User:: all();
        return view('admin.changepassword',compact('user'));
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
            'name' => 'required|string|max:255',
        'email_id' => 'required|string|max:255|unique:users',
        'std_id' => 'required|string|max:255',
        'password' => 'required|string|min:6|confirmed',
        'role' => 'required', //validate role input
            
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

       $student = new User;

         $student->name = $request->input('name');
        $student->email = $request->input('email_id');
        $student->email_id = $request->input('std_id');
        $student->password = bcrypt($request->input('password'));
       $student->role = $request->input('role');
         
        $student->save();

        return response()->json(['success' => 'Data Added successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function show($sample_data)
    {
        if(request()->ajax())
        {
            $data = Student::findOrFail($sample_data);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = User::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample_data $sample_data)
    {

$rules = array(
            'name' =>  'required',
            'email_id'=>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'name'   =>  $request->name,
            'email'    =>  $request->email_id,
            'email_id'    =>  $request->std_id,
            'role'  =>  $request->role,
           'password' => bcrypt($request->password)

        );

        User::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Password is successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
    }
}
