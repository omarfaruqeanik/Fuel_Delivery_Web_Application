<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adminpanel_coursepreregistration;
use DB;
use DataTables;
use App\User;
use App\Fuelstation;


class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        //  $this->middleware('superadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $cuser = User::all()
                    ->where("role",'customer');
        $cfuser = User::all()
              ->where("role",'owner');
        $causer = User::all()
              ->where("role",'admin');
       $cproposal = Fuelstation::all();
    
              
        $totaluser = count($cuser);
        $totalowner = count($cfuser);
        $totaladmin = count($causer);
     
        return view('admin.index', compact('totaluser','totalowner', 'totaladmin'));
    }
    
    
     public function admininfo(Request $request)
    {
if(request()->ajax())
     {
       $data = DB::table('users')
        ->where('role', 'admin');
      return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o"></i> Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
     }
          
        $user= User:: all();
        return view('superadmin.adminlist',compact('user'));
    }
    
    
    public function superadmin()
    {
        $cuser = User::all()
        ->where("role",'customer');
        $cfuser = User::all()
        ->where("role",'owner');
        $causer = User::all()
        ->where("role",'admin');
        $cproposal = Fuelstation::all();

  
        $totaluser = count($cuser);
        $totalowner = count($cfuser);
        $totaladmin = count($causer);

        return view('superadmin.index', compact('totaluser','totalowner', 'totaladmin'));   
     }
    
    public function showfeedback(Request $request)
    {
        $search = $request->input('search');
        $students = Feedback::all()
                    ->where("semester",$search);
        return view('admin.feedbackstudent', compact('students'));
    }
    
    
    
        public function showmarks(Request $request)
    {
        $search = $request->input('search');

                    
             $students_intr = DB::table('supervisor__marks')
                     ->join('internal__marks','internal__marks.s_id', '=', 'supervisor__marks.s_id')
                     ->select('internal__marks.*','supervisor__marks.*')
                      ->where("internal__marks.semester",$search)
                       ->where("supervisor__marks.semester",$search)
                     ->get();
                    
                    
          
        return view('admin.marks', compact('students_intr'));
    }

 public function showinfo12()
    {
         $students = Fuelstation::all();
         $user= User:: all();
        return view('admin.display', compact('students','user'));
    }
    
     public function SupervisorSummary(Request $request) {
 $search = $request->input('search');
      $students = Fuelstation::all()
                  ->where("semester",$search);
        $collection = Fuelstation::groupBy('sv_init')
                    ->where("semester",$search)
                    ->selectRaw('count(sv_init), sv_init')
                    ->selectRaw('sv_init')
                    ->pluck('count(sv_init)','sv_init');
    	return view('admin.supervisorsummary', compact('students','collection','search'));
     }
     
    public function index1(Request $request)
    {
        if(request()->ajax())
     {
      if($request->category)
      {
       $data = DB::table('project_details')
         ->where('semester', $request->category);
      }
      else
      {
       $data = DB::table('project_details')
         ->select("*");
      }
       return DataTables::of($data)
                    ->make(true);
     }

     $search = $request->input('search');
        $search = $request->input('search');
        $collection = Fuelstation::groupBy('sv_init')
                    ->where("semester",$search)
                    ->selectRaw('count(sv_init), sv_init')
                    ->selectRaw('sv_init')
                    ->pluck('count(sv_init)','sv_init');
        $user= User:: all();
        
        return view('admin.report',compact('user','collection'));
    }

     public function index2()
    {
        $students = Fuelstation::all();
         $collection = Fuelstation::groupBy('sv_init')
                     ->where("semester",'Spring-2020')
                    ->selectRaw('count(sv_init), sv_init')
                    ->selectRaw('sv_init')
                    ->pluck('count(sv_init)','sv_init');
        return view('admin.display', compact('students','collection'));
    }
    
  public function index3()
    {
        $students = Fuelstation::all();
        return view('admin.showstudent', compact('students'));
    }
    
     public function assignstudent(Request $request)
    {
     $search = $request->input('search');
        $students = Fuelstation::all()
                    ->where("semester",$search);
        return view('admin.assign', compact('students'));
 
    }
    
public function getInitialList(Request $request)
    {
        $states = DB::table("initials")
                    ->where("sv_id",$request->sv_id)
                    ->pluck("sv_initial","sv_id");
        return response()->json($states);
    }
    
    

// public function getStates($id)
// {
//     $states = DB::table("initials")
//                 ->where("sv_id",$id)
//                 ->pluck("sv_initial","id");
//     return response()->json($states);
// }
    
    

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index4($id)
    {
         $student = Fuelstation::find($id);
        $students = Student::all();
        $message = Message::all();
        return view('admin.showinfo', compact('student', 'id', 'message','students'));
    }
    
    public function show($id)
    {
         $student = Fuelstation::find($id);
        $students = Fuelstation::all();
        $message = Message::all();
        return view('admin.studentinfo', compact('student', 'id', 'message','students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
   public function edit1($id)
    {
         $student = Fuelstation::find($id);
         $user  = User:: all();
        return view('admin.edit', compact('student', 'id','user'));
    }
    
    public function update1(Request $request, $id)
    {
        // $this->validate($request, [
        //     'sv_name' =>  'required',
        //     'sv_init' =>  'required'
        // ]);

         $student = Fuelstation::find($id);
         $student->s_id = $request->input('s_id');
         $student->s_name = $request->input('s_name');
         $student->batch = $request->input('batch');
         $student->semester = $request->input('semester');
         $student->email = $request->input('email');
         $student->phone = $request->input('phone');
         $student->project = $request->input('project');
         $student->title = $request->input('title');
         $student->description = $request->input('description');
         $student->sv_name = $request->input('sv_name');  
         $student->sv_init = $request->input('sv_init'); 
         
        $student->save();

 return redirect()->route('admin')->with('success', 'Data Updated');
      
    }

     
     
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $students = Fuelstation::all();
         
        $this->validate($request, [
            'sv_name' =>  'required',
            'sv_init' =>  'required'
        ]);

         $student = Fuelstation::find($id);
         $student->s_id = $request->input('s_id');
         $student->s_name = $request->input('s_name');
         $student->batch = $request->input('batch');
         $student->semester = $request->input('semester');
         $student->email = $request->input('email');
         $student->phone = $request->input('phone');
         $student->project = $request->input('project');
         $student->title = $request->input('title');
         $student->description = $request->input('description');
         $student->sv_name = $request->input('sv_name');  
         $student->sv_init = $request->input('sv_init'); 
         $student->Internal_Reviewer_1 = $request->input('Internal_Reviewer_1');
         $student->Internal_Reviewer_2 = $request->input('Internal_Reviewer_2'); 
         
        $student->save();
 return redirect('viewstudent')->with('success','Update Successfully')->with('students', $students);
//  return redirect()->route('viewinfo.index')->with('success', 'Data Updated');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
    }
}
