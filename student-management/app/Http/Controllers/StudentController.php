<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;


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
            return redirect('/');
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
            
            return redirect('/');
        }
        else{
            echo "your record are not deleted";
        }

    }


    function editData($id){
         $student = Student::find($id);
        return view('student-edit',['editStudent'=>$student]);
    }

        function editRecord(Request $request,$id){

        $student = Student::find($id);
       if ($request->hasFile('image')) {
        // Optional: delete old file if it exists
        if ($student->image && Storage::exists('public/' . $student->image)) {
            Storage::delete('public/' . $student->image);
        }

        // ✅ Store new file
        $filePath = $request->file('image')->store('public');
        $filename = basename($filePath); // Get just the file name
        $student->image = $filename;
    }

        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;

        if($student->save()){
            return redirect('/');
        }
        else{
            return "update not successfully";
        }
       
    }

    function search(Request $request){
    $search = Student::where('name','like',"%$request->search%")->get();
    return view('student-list',['student'=>$search]);

}

}