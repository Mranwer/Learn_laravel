<?php

namespace App\Http\Controllers;
use App\Models\Record;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    function insertData(){
        $response = Record::insert([
           'name'=>'Divyanshu',
           'email'=>'div@123',
           'phone'=>'0987654321'
        ]);
        if($response){
            echo "data inserted successfully";
        }
        else{
           echo "data inserted unccessfully"; 
        }
    }

    function deleteData(){
        $response = Record::where('id','1')->delete();
        if($response){
            echo "data deleted successfully";
        }
        else{
           echo "data deleted unccessfully"; 
        }
    }

    function updateData(){
        $response = Record::where('id','1')->update([
           'name'=>'farhan',
           'email'=>'far@123',
           'phone'=>'0987654321'
        ]);
        if($response){
            echo "data updated successfully";
        }
        else{
           echo "data updated unccessfully"; 
        }
    }

    function showData(){
        $result = Record::get();
        return view('employee',['user'=>$result]);
    }

}
