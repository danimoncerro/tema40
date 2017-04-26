<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;

class YearController extends Controller
{
    
    public function index()
    {
    	$years = Year::all();
    	return view('years.index', compact('years'));
    }

    public function create() 
    {
    	return view('years.form_create');
    }

    public function save(Request $request)
    {
    	if ($request->id == null) {
    		// Am venit din formularul de adaugare
    		$year = new Year;
    	} else {
    		// Am venit din formularul de editare 
    		// Cautam anul cu idul selectat
	    	$year = Year::find($request->id);
    	}

    	$year->name = $request->name;

    	$year->save();

    	// redirect catre listare anii de studiu
    	return redirect('/years');
    }

     public function edit($id)
    {
    	
    	$year = Year::find($id);

    	return view('years.form_edit', compact('year'));
    }

     public function delete($id)
    {
    	$year = Year::find($id);
    	$year->delete();

    	// redirect catre listare ani de studiu
    	return redirect('/years');
    }
}
