<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TestApiController extends Controller
{
     public function test(){
        
        return \App\Student::paginate(1);
     // 	$data=[
    	// 	'siswa'=>\App\Student::all(),

    	// ];
    	// return $data;
    	//return Student::all();
    //	$data = [
    	//	'guru'=> Teacher::all()
    //	];
    	//return $data;
     }


    	
   
}
