<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
student::create([
	'name'=>$data['name'],
	'email'=>$data['email'],
	'password'=> bcrypt($data['password']),
	'classroom_id'=>$data['classroom'],
]);

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




}
