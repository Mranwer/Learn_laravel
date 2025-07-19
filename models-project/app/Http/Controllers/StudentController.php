<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function insertData(){
        $response = Student::insert([
           'name'=>'Farhan',
           'email'=>'frhan@123.com',
           'phone'=>'0987654321'
        ]);
        if($response){
            echo "your data has been submitted";
        }
        else{
           echo "your data has been not submitted"; 
        }
    }

   function dataShow(){
    //   $result = Student::get();
      $result = DB::table('students')->get();
      return view('student',['data'=>$result]);
   }
}

