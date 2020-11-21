<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\find;
use App\student;
use App\registerstudent;
use App\createcourse;

class StudentController extends Controller
{
   
 /*  public function index()
    {
        $stu=student::all();
        return view('regg')->with('allstu',$stu);
    }
  
    public function index()
    {
    	$students="mujahidul islam";
    	return view('index')->with('student',$students);
     public function home()
    {
        
        return view('reg');
    }
 }*/
  

   public function index()
    {
        
        return view('index');
    } 



    public function addcourse()
    {
        
       $cour=createcourse::all();
        return view('addcourse')->with('allcour',$cour);
    } 
 

   public function createcourse()
    {
       $stu=createcourse::all();
        return view('createcourse')->with('allstu',$stu);
    } 


    
    public function allcourse()
    {
        
       $stu=student::all();
        return view('allcourse')->with('allstu',$stu);
    }

    
    public function about()
    {
        
        return view('about');
    }

    
    public function contact()
    {
        
        return view('contact');
    }

    
    public function courses()
    {
        
        return view('course');
    } 

    
    public function login()
    {
        
        return view('login');
    }

    
    public function register()
    {
        
        return view('register');
    }


    //Register
  public function store(Request $request)
    {
      //Insert data into REG Table
      $student = new registerstudent;
      $student->name = $request->name;
      $student->department= $request->department;
      $student->bithdate = $request->birthday;
      $student->gender = $request->gender;
      $student->phone = $request->phone; 
      $student->email = $request->email;     
      $student->save();

      return redirect()->route('register');
    }


    //create course
     public function save(Request $request)
    {
      //Insert data into Ccourse Table
      $create = new createcourse;
      $create->name = $request->na;
      $create->code = $request->co;  
      $create->department= $request->de;
      
      $create->save();

   //  dd('DONE');
     return redirect()->route('createcourse');
    }


   //add course
     public function addc(Request $request)
    {


      $make = new student;
   
          $make->id = $request->id;
          $make->Name = $request->name;  
          $make->Courses= $request->coursecode;
      
         $make->save(); 
         return redirect()->route('allcourse');
      
      //Insert data into Student Table
     //$grades = Grade::get();
       //$student=student::all();
      // $s={{$make->Name}}
     // print "foo is $student->Name($student,addc)";
     // // print "foo is {{$student}}";
       //print "foo is  {"$student->id"}";
       //SELECT * FROM student;
         
         //$items = student::table('id')
           //  ->select('id')
           //  ->where('ref_id','=', $request->id)
            // ->first();

         //print "foo is $ref_id ";

   //
    }
}
     
    //  $make = new student::find(1);
    /*  if($make->id == $request->id)
      {
          $make->id = $request->id;
          $make->Name = $request->name;  
          $make->Courses= $request->coursecode;
      
         $make->save(); 
         return redirect()->route('index');
      }
      else
      {
        dd('id not matched');
      }


   //  dd('DONE');
   
   */
