<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    function fileUpload(Request $request){
        $path = $request->file('file')->store('public');
        echo $path;
        $fileNameArray = explode("/",$path);
        $fileName =$fileNameArray[1];
        return view('dispay',['data'=>$fileName]);
    }
}
