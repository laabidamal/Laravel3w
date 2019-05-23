<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Classroom;
use App\Student;


class TestController extends Controller
{
    public function showClassroomList(){

   //$classroom =classroom::all(1);
   $classroom =Classroom::all();
   return view('welcome',['amal'=>$classroom]);
  

 }
 public function showAddClassroom(){

   return view('classroom.add');

}

public function handleAddClassroom(){

$data=Input::all();
classroom::create([
	'title'=>$data['title'],
	'photo'=>$data['photo'],
   //dd($data),
]);
//return back();
return redirect(route('showClassroomList'));
}


public function showAddStudent(){

   $classroom =Classroom::all();
   return view('student.add',['classrooms'=>$classroom]);

}

public function handleAddStudent()
{
$data=Input::all();


}

public function handleDeleteStudent($id){

$student=Student::find($id);

if($student){

$student->delete();
return 'good!!';

}else{

	return 'erreur';
}

}

public function showViewStudent($id){

 $student=Student::find($id);
 return view('student.view',['student'=>$student]);

}


public function showUpdateStudent($id){

$student=Student::find($id);
if($student){

   $classroom =Classroom::all();

	return view('student.update',['student'=>$student,'classrooms'=>$classroom]);

}else

return 'erreur';

}


public function handeleUpdateStudent($id){

     $student=Student::find($id);

     $data=Input::all();      
     if($student){     
      /*$student->name=$data["name"];

     $student->email=$data["email"];

     $student->classroom_id=$data["classroom_id"];     
      $student->save();*/

       $s=DB::table("student")->where('id','=',$id)->update(['name'=>$data["name"],

        'email'=>$data["email"],

           
     ]);

}
}
}
