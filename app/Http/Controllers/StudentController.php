<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Year;

class StudentController extends Controller
{
    public function index()
    {
    	$students = Student::all();
    	return view('students.index', compact('students'));
    }

    public function edit($id)
    {
    	
    	$student = Student::find($id);
        $years = Year::all();

    	return view('students.form_edit', compact('student', 'years'));
    }

     public function save(Request $request)
    {
    	if ($request->id == null) {
    		// Am venit din formularul de adaugare
    		$student = new Student;
    	} else {
    		// Am venit din formularul de editare 
    		// Cautam studentul cu idul selectat
	    	$student = Student::find($request->id);
    	}

    	$student->name = $request->name;
    	$student->years_id = $request->years_id;
    	//dd($student);
    	$student->save();

    	// redirect catre listare judete
    	return redirect('/students');
    }

    public function delete($id)
    {
    	$student = Student::find($id);
    	$student->delete();

    	// redirect catre listare orase
    	return redirect('/students');
    }

     public function create() 
    {
    	return view('students.form_create');
    }
}
