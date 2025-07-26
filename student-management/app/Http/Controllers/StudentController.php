<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function addData(Request $request){
      if ($request->hasFile('image')) {
        $filePath = $request->file('image')->store('public');
        $fileName = basename($filePath); // Just the file name
    } else {
        $fileName = null; // Or return error
    }

        $student = new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->image = $fileName;
        $student->phone=$request->phone;
        $student->save();
        if($student){
            return "successfully";
        }
        else{
            echo "Operation failed";
        }

    }

    function showdata(){
        $result = Student::all();
        return view('student-list',['student'=>$result]);
    }

    function deleteData($id){
       $isDeleted = Student::destroy($id);
        if($isDeleted){
            echo "<script>alert('delete success')</script>";
            return redirect('/');
        }
        else{
            echo "your record are not deleted";
        }

    }
       
    }

