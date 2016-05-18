<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;

class ManagerController extends Controller
{
    //

    public function students(){
    	return view('manager.students');
    }

    public function courses(){
    	$courses = Course::all();

    	if ($courses->count()) {
    		foreach ($courses as $key => $value) {
    			
    		}
    	}
    	$data['courses'] = $courses;


    	return view('manager.courses',$data);
    }
    public function scores(){
    	return view('manager.scores');
    }
}
