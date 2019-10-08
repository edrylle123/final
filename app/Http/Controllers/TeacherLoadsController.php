<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeacherLoad;


class TeacherLoadsController extends Controller
{
    public function index()
    {
    	$teachersload = TeacheLoadr::all();
    	return view('teacher-load.index')->with('teacher-load', $teachers);
    }
    public function create()
    {
    	$sections = Section::all();
        return view('teacher-load.create',compact('sections'));
    }
     public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$teacher = new Teacher;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teachers');
    }
    
   
    public function edit(Teacher $teacher)
    {
        $sections = Section::all();
        return view('teachers.edit',compact('sections','teacher'));
    }

    public function update(Teacher $teacher)
    {
        $teacher->name = request()->name;
        $teacher->save();
        return redirect('/teachers');
    }


}
