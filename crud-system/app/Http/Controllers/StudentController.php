<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    function addData(Request $request){

        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
    ]);


        if ($request->hasFile('file')) {
        $filePath = $request->file('file')->store('public');
        $fileName = basename($filePath); // Just the file name
    } else {
        $fileName = null; // Or return error
    }

        $student = new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->file = $fileName;
        $student->phone=$request->phone;
        $student->save();
        if($student){
            return redirect('/');
        }
        else{
            echo "Operation failed";
        }

    }
    function listData(){
        $result = Student::all();
        return view('list-student',['students'=>$result]);
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
        return view('edit-student',['editStudent'=>$student]);
    }

    function editDataRecord(Request $request,$id){

        $student = Student::find($id);
       if ($request->hasFile('file')) {
        // Optional: delete old file if it exists
        if ($student->file && Storage::exists('public/' . $student->file)) {
            Storage::delete('public/' . $student->file);
        }

        // ✅ Store new file
        $path = $request->file('file')->store('public');
        $filename = explode('/', $path)[1]; // Get just the file name
        $student->file = $filename;
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
}
