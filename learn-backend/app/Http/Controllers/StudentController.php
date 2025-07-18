<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
//     function insertData(){
//     $result = DB::table('students')->insert([
      
//     'name' => 'Farhan',
//     'email'=>'farhan@123',
//     'phone'=>'0987654321'

//    ]);
//    if($result){
//     echo "your data has been submited";
//    }
//    else{
//     echo "your data has been not submited";
//    }
//    }

// function updateData(){
//     $result = DB::table('students')->where('id','1')->update([
      
//     'name' => 'Raushan',
//     'email'=>'raushan@123',
//     'phone'=>'12345678890'

//    ]);
//    if($result){
//     echo "your data has been Updated";
//    }
//    else{
//     echo "your data has been not updated";
//    }
//    }
    

function deleteData(){
    $result = DB::table('students')->where('id','2')->delete();
   if($result){
    echo "your data has been deleted";
   }
   else{
    echo "your data has been not deleted";
   }
   }

}
