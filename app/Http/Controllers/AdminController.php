<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\User;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin');
        // $this->middleware('superadmin');
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
    //    $cproposal = Order::all();
       
    //    $cnotproposal =  DB::select('SELECT u.std_id  FROM users u WHERE  u.role = "Classroom" AND u.std_id NOT IN (SELECT p.s_id FROM project_details p)');
              
        $totaluser = count($cuser);
        $totalfaculty = count($cfuser);
        $totaladmin = count($causer);
        $totalproposal = 0;
        $totalnotproposal = 0;
        
        return view('admin.index', compact('totaluser','totalfaculty', 'totaladmin', 'totalproposal','totalnotproposal'));
    }
    
    
    public function superadmin()
    {
         $cuser = User::all()
                    ->where("role",'Classroom');
        $cfuser = User::all()
              ->where("role",'faculty');
        $causer = User::all()
              ->where("role",'admin');
       $cproposal = Classroom::all();
        $cnotproposal =DB::select('SELECT u.std_id  FROM users u WHERE  u.role = "Classroom" AND u.std_id NOT IN (SELECT p.s_id FROM project_details p)');
              
        $totaluser = count($cuser);
        $totalfaculty = count($cfuser);
        $totaladmin = count($causer);
        $totalproposal = count($cproposal);
       $totalnotproposal = count($cnotproposal);
        
        return view('superadmin.index', compact('totaluser','totalfaculty', 'totaladmin', 'totalproposal','totalnotproposal'));
    }
    
    public function showfeedback(Request $request)
    {
        $search = $request->input('search');
        
        $Classrooms = Feedback::all()
                    ->where("semester",$search);
        return view('admin.feedbackClassroom', compact('Classrooms','semester'));
    }
    
    
    
        public function showmarks(Request $request)
    {
        $search = $request->input('search');

                    
             $Classrooms_intr = DB::table('supervisor__marks')
                     ->join('internal__marks','internal__marks.s_id', '=', 'supervisor__marks.s_id')
                     ->select('internal__marks.*','supervisor__marks.*')
                      ->where("internal__marks.semester",$search)
                       ->where("supervisor__marks.semester",$search)
                     ->get();
                    
                    
          
        return view('admin.marks', compact('Classrooms_intr'));
    }

 public function showinfo12()
    {
         $Classrooms = Classroom::all();
         $user= User:: all();
        return view('admin.display', compact('Classrooms','user'));
    }
    
     public function allClassroominfo(Request $request) {
        
       $search = $request->input('search');
       $campus = $request->input('campus');
       
 if( $campus != null) {
        if($request->has('search') && $search != null) {
                $Classrooms = Classroom::all() 
                  ->where("semester",$search);
        }
   }
 else if( $search != null) {
        if($request->has('campus') && $campus != null) {
                $Classrooms = Classroom::all() 
                  ->where("campus",$campus);
        }
   }
  else if($request->has('search') && $search != null && $request->has('campus')&& $campus != null) {
    //   $Classrooms = Classroom::all() 
    //               ->where("semester",$search)
    //               ->where("campus",$campus);
         $Classrooms = DB::table('project_details')
                  ->where("semester",$search)
                  ->where("campus",$campus)
                  ->get();
  }
  else
        {
            $Classrooms = Classroom::all();
       
        }
        return view('admin.allClassroom', compact('Classrooms','search','semester'));
     }
     
     
     public function allnotsubmtClassroominfo(Request $request) {
        

          $Classrooms = DB::select('SELECT u.* FROM users u WHERE  u.role = "Classroom" AND u.std_id NOT IN (SELECT p.s_id FROM project_details p)ORDER BY created_at DESC');
        return view('admin.notsubmittedClassroom', compact('Classrooms'));
     }
    
 ///PC Classroom Info Download
      public function pcallClassroominfo(Request $request) {
        
       $search = $request->input('search');
       $campus = $request->input('campus');
       
        if($request->has('search') && $search != null) {
    //   $Classrooms = Classroom::all() 
    //               ->where("semester",$search)
    //               ->where("campus",$campus);
         $Classrooms = DB::table('project_details')
                  ->where("semester",$search)
                  ->where("campus",'PC')
                  ->get();
  }
  else
        {
            $Classrooms = DB::table('project_details')
                  ->where("campus",'PC')
                  ->get();
       
        }
        return view('admin.pcallClassroom', compact('Classrooms','search','semester'));
     }
    
    
    
    
     public function SupervisorSummary(Request $request) {
        
 $search = $request->input('search');
      $Classrooms = Classroom::all()
                  ->where("semester",$search);
        $collection = Classroom::groupBy('sv_init')
                    ->where("semester",$search)
                    ->selectRaw('count(sv_init), sv_init')
                    ->selectRaw('sv_init')
                    ->pluck('count(sv_init)','sv_init');
        return view('admin.supervisorsummary', compact('Classrooms','collection','search','semester'));
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
        $collection = Classroom::groupBy('sv_init')
                    ->where("semester",$search)
                    ->selectRaw('count(sv_init), sv_init')
                    ->selectRaw('sv_init')
                    ->pluck('count(sv_init)','sv_init');
        $user= User:: all();
        
        return view('admin.report',compact('user','collection'));
    }

     public function index2()
    {
        $Classrooms = Classroom::all();
         $collection = Classroom::groupBy('sv_init')
                     ->where("semester",'Spring-2020')
                    ->selectRaw('count(sv_init), sv_init')
                    ->selectRaw('sv_init')
                    ->pluck('count(sv_init)','sv_init');
        return view('admin.display', compact('Classrooms','collection'));
    }
    
  public function index3()
    {
        $Classrooms = Classroom::all();
        return view('admin.showClassroom', compact('Classrooms'));
    }
    
    
     public function assignClassroom(Request $request)
    {
     $search = $request->input('search');
        $Classrooms = Classroom::all()
                    ->where("semester",$search);
        
        return view('admin.assign', compact('Classrooms','semester'));
 
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
         $Classroom = Classroom::find($id);
        $Classrooms = Classroom::all();
        $message = Message::all();
        return view('admin.showinfo', compact('Classroom', 'id', 'message','Classrooms'));
    }
    
    public function show($id)
    {
         $Classroom = Classroom::find($id);
        $Classrooms = Classroom::all();
        $message = Message::all();
        return view('admin.Classroominfo', compact('Classroom', 'id', 'message','Classrooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
   public function edit1($id)
    {
         $Classroom = Classroom::find($id);
         $user  = User:: all();
        return view('admin.edit', compact('Classroom', 'id','user'));
    }
    
    public function update1(Request $request, $id)
    {
        // $this->validate($request, [
        //     'sv_name' =>  'required',
        //     'sv_init' =>  'required'
        // ]);

         $Classroom = Classroom::find($id);
         $Classroom->s_id = $request->input('s_id');
         $Classroom->s_name = $request->input('s_name');
         $Classroom->batch = $request->input('batch');
         $Classroom->semester = $request->input('semester');
         $Classroom->email = $request->input('email');
         $Classroom->phone = $request->input('phone');
         $Classroom->project = $request->input('project');
         $Classroom->title = $request->input('title');
         $Classroom->description = $request->input('description');
         $Classroom->sv_name = $request->input('sv_name');  
         $Classroom->sv_init = $request->input('sv_init'); 
         
        $Classroom->save();

 return redirect()->route('admin')->with('success', 'Data Updated');
      
    }

     
     
    public function edit($id)
    {
         $Classroom = Classroom::find($id);
         $user  = User:: all();
        return view('admin.view', compact('Classroom', 'id','user'));
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
         $Classrooms = Classroom::all();
         
        $this->validate($request, [
            'sv_name' =>  'required',
            'sv_init' =>  'required'
        ]);

         $Classroom = Classroom::find($id);
         $Classroom->s_id = $request->input('s_id');
         $Classroom->s_name = $request->input('s_name');
         $Classroom->batch = $request->input('batch');
         $Classroom->semester = $request->input('semester');
         $Classroom->email = $request->input('email');
         $Classroom->phone = $request->input('phone');
         $Classroom->project = $request->input('project');
         $Classroom->title = $request->input('title');
         $Classroom->description = $request->input('description');
         $Classroom->sv_name = $request->input('sv_name');  
         $Classroom->sv_init = $request->input('sv_init'); 
         $Classroom->Internal_Reviewer_1 = $request->input('Internal_Reviewer_1');
         $Classroom->Internal_Reviewer_2 = $request->input('Internal_Reviewer_2'); 
         
        $Classroom->save();
 return redirect('viewClassroom')->with('success','Update Successfully')->with('Classrooms', $Classrooms);
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
        //
    }
}
