<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function viewCreateTeachers(){
        return view('teacherform');
    }

    public function viewTeachers(){
        $teachers = Teacher::where('is_deleted',0)->get();
        return view('table', compact('teachers'));
    }

    public function editTeachers($id){
        $teachers = Teacher::find($id);
        return view('teacherseditform', compact('teachers'));
    }
   public function saveTeacher(Request $request)
   {
       $teacher = new Teacher();    //$teacher = Teacher::find($id)
       $teacher->name = $request->name;
       $teacher->qualification = $request->qualification;
       $teacher->age = $request->age;
       $teacher->course = $request->course;
       $teacher->save();
       return redirect('/')->with('status','teacher added successfully');
   } 
   public function updateTeachers(Request $request, $id){
       $teacher = Teacher::find($id);
       if($teacher){
           $teacher->name = $request->name;
           $teacher->qualification= $request->qualification;
           $teacher->age = $request->age;
           $teacher->course = $request->course;
           $teacher->update();
           return redirect()->back()->with(["success"=>'update successfully']);
       }else{
           return redirect()->back()->with(["error"=>'Somthing Went Wrong']);
       }
   }
   public function deleteTeachers($id){
       $teacher = Teacher::find($id);
       $teacher->is_deleted=1;
       $teacher->save();
       return redirect()->back()->with('status','Deleted Successfully');

   }
}
